

<?php $__env->startSection('title'); ?>
  <?php echo e($module_name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo e($module_name); ?>

      <a class="btn btn-sm btn-warning pull-right" href="<?php echo e(route(Request::segment(2) . '.create')); ?>"><i
          class="fa fa-plus"></i> <?php echo app('translator')->get('Add'); ?></a>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <?php if(session('errorMessage')): ?>
      <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo e(session('errorMessage')); ?>

      </div>
    <?php endif; ?>
    <?php if(session('successMessage')): ?>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo e(session('successMessage')); ?>

      </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
    <?php endif; ?>

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo app('translator')->get('Update form'); ?></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="<?php echo e(route(Request::segment(2) . '.update', $detail->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="box-body">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_lang => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="<?php if($key_lang == 0) { echo 'active'; } ?>">
                <a href="#tab_<?php echo e($key_lang); ?>" data-toggle="tab">
                  <h5>Thông tin <?php echo e($lang->title); ?> <span class="text-danger">*</span></h5>
                </a>
              </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <button type="submit" class="btn btn-primary btn-sm pull-right">
                <i class="fa fa-floppy-o"></i>
                <?php echo app('translator')->get('Save'); ?>
              </button>
            </ul>

            <div class="tab-content">
              <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_la => $lang_tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php
                $content = $title = $brief = $url_link_title = '';
                $language = $lang_tab->lang_code; 
                if(isset($detail->content->$language)){
                  $content = $detail->content->$language;
                }
                if(isset($detail->title->$language)){
                  $title = $detail->title->$language;
                }
                if(isset($detail->brief->$language)){
                  $brief = $detail->brief->$language;
                }
                if(isset($detail->url_link_title->$language)){
                  $url_link_title = $detail->url_link_title->$language;
                }
              ?>
                <div class="tab-pane <?php if($key_la == 0) { echo 'active'; } ?>" id="tab_<?php echo e($key_la); ?>">
                  <div class="row">
                    <div class="col-md-6">
                     <div class="form-group">
                        <label>
                          <?php echo app('translator')->get('Title'); ?> <?php echo e($lang_tab->title); ?>

                          <small class="text-red">*</small>
                        </label>
                        <input type="text" class="form-control" name="title[<?php echo e($lang_tab->lang_code); ?>]" placeholder="<?php echo app('translator')->get('Title'); ?>"
                          value="<?php echo e($title); ?>" required>
                      </div>
                       <div class="form-group">
                        <label><?php echo app('translator')->get('Brief'); ?> <?php echo e($lang_tab->title); ?></label>
                        <textarea name="brief[<?php echo e($lang_tab->lang_code); ?>]" id="brief" class="form-control" rows="5"><?php echo e($brief); ?></textarea>
                      </div>
                      
                      <div class="form-group">
                        <label><?php echo app('translator')->get('Url redirect title'); ?> <?php echo e($lang_tab->title); ?></label>
                        <input type="text" class="form-control" name="url_link_title[<?php echo e($lang_tab->lang_code); ?>]"
                          placeholder="<?php echo app('translator')->get('Url redirect title'); ?>"
                          value="<?php echo e($url_link_title); ?>">
                      </div>
                      
                    </div>
            
                    <div class="col-md-6">
                      
                      <div class="form-group">
                        <label><?php echo app('translator')->get('Content'); ?> <?php echo e($lang_tab->title); ?></label>
                        <textarea name="content[<?php echo e($lang_tab->lang_code); ?>]" id="content_<?php echo e($lang_tab->lang_code); ?>" class="form-control"><?php echo e($content); ?></textarea>
                      </div>
                    </div>
            
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-12">
                <hr style="border-top: dashed 2px #a94442; margin: 10px 0px;">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label><?php echo app('translator')->get('Parent element'); ?></label>
                      <select name="parent_id" id="parent_id" class="form-control select2" style="width: 100%">
                        <option value=""><?php echo app('translator')->get('Please select'); ?></option>
                        <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($item->parent_id == 0 || $item->parent_id == null): ?>
                            <option value="<?php echo e($item->id); ?>" <?php echo e($detail->parent_id == $item->id ? 'selected' : ''); ?>><?php echo e($item->title->en); ?></option>
                            <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($item->id == $sub->parent_id): ?>
                                <option value="<?php echo e($sub->id); ?>" <?php echo e($detail->parent_id == $sub->id ? 'selected' : ''); ?>>- - <?php echo e($sub->title->en); ?></option>
                                <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($sub->id == $sub_child->parent_id): ?>
                                    <option value="<?php echo e($sub_child->id); ?>" <?php echo e($detail->parent_id == $sub_child->id ? 'selected' : ''); ?>>- - - - <?php echo e($sub_child->title->en); ?></option>
                                  <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>
                        <?php echo app('translator')->get('Block type'); ?>
                        <small class="text-red">*</small>
                      </label>
                      <select name="block_code" id="block_code" class="form-control select2" style="width: 100%" required>
                        <option value=""><?php echo app('translator')->get('Please select'); ?></option>
                        <?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($item->block_code); ?>"
                            <?php echo e($item->block_code == $detail->block_code ? 'selected' : ''); ?>><?php echo e($item->name); ?> <?php echo e($item->block_code); ?>

                          </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label><?php echo app('translator')->get('Url redirect'); ?></label>
                      <input type="text" class="form-control" name="url_link" placeholder="<?php echo app('translator')->get('Url redirect'); ?>"
                        value="<?php echo e($detail->url_link); ?>">
                    </div>
                    <div class="form-group">
                      <label><?php echo app('translator')->get('Image'); ?></label>
                      <div class="input-group">
                        <span class="input-group-btn">
                          <a data-input="image" onclick="openPopupImg('image')" data-preview="image-holder" class="btn btn-primary lfm"
                            data-type="cms-image">
                            <i class="fa fa-picture-o"></i> <?php echo app('translator')->get('Select'); ?>
                          </a>
                        </span>
                        <input id="image" class="form-control" type="text" name="image"
                          placeholder="<?php echo app('translator')->get('Image source'); ?>" value="<?php echo e($detail->image); ?>">
                      </div>
                      <div id="image-holder" style="margin-top:15px;max-height:100px;">
                        <?php if($detail->image != ''): ?>
                          <img id="view_image" style="height: 5rem;" src="<?php echo e($detail->image); ?>">
                        <?php endif; ?>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label><?php echo app('translator')->get('Status'); ?></label>
                      <div class="form-control">
                        <?php $__currentLoopData = App\Consts::STATUS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <label>
                            <input type="radio" name="status" value="<?php echo e($key); ?>"
                              <?php echo e($detail->status == $key ? 'checked' : ''); ?>>
                            <small class="mr-15"><?php echo e(__($value)); ?></small>
                          </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label><?php echo app('translator')->get('Order'); ?></label>
                      <input type="number" class="form-control" name="iorder" placeholder="<?php echo app('translator')->get('Order'); ?>"
                        value="<?php echo e($detail->iorder); ?>">
                    </div>
                    <div class="form-group hidden">
                      <label><?php echo app('translator')->get('Icon'); ?></label>
                      <input type="text" class="form-control" name="icon" placeholder="Ex: fa fa-folder"
                        value="<?php echo e($detail->icon); ?>">
                    </div>
                    <div class="form-group">
                      <label><?php echo app('translator')->get('Image background'); ?></label>
                      <div class="input-group">
                        <span class="input-group-btn">
                          <a data-input="image_background" onclick="openPopupImg('image_background')" data-preview="image_background-holder" class="btn btn-primary lfm"
                            data-type="cms-image_background">
                            <i class="fa fa-picture-o"></i> <?php echo app('translator')->get('Select'); ?>
                          </a>
                        </span>
                        <input id="image_background" class="form-control" type="text" name="image_background"
                          placeholder="<?php echo app('translator')->get('Image source'); ?>" value="<?php echo e($detail->image_background); ?>">
                      </div>
                      <div id="image_background-holder" style="margin-top:15px;max-height:100px;">
                        <?php if($detail->image_background != ''): ?>
                          <img id="view_image_background" style="height: 5rem;" src="<?php echo e($detail->image_background); ?>">
                        <?php endif; ?>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="box-footer">
          <a class="btn btn-success btn-sm" href="<?php echo e(route(Request::segment(2) . '.index')); ?>">
            <i class="fa fa-bars"></i> <?php echo app('translator')->get('List'); ?>
          </a>
          <button type="submit" class="btn btn-primary pull-right btn-sm"><i class="fa fa-floppy-o"></i>
            <?php echo app('translator')->get('Save'); ?></button>
        </div>
      </form>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<style>
div.ck-editor__editable {
    height: 300px !important;
  }
</style>
<?php $__env->startSection('script'); ?>
<script>
  <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    CKEDITOR.replace('content_<?php echo e($lang->lang_code); ?>', ck_options);
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</script>
  <script>
	 
   CKEDITOR.replace('content', ck_options); 

    $(document).ready(function() {
      $(document).on('change', '#block_code', function() {
        let block_code = $(this).val();
        var _targetLayout = $('#block_layout');
        var _targetStyle = $('#block_style');
        _targetLayout.html('');
        _targetStyle.html('');
        var url = "<?php echo e(route('blocks.params')); ?>/";
        $.ajax({
          type: "GET",
          url: url,
          data: {
            "block_code": block_code,
          },
          success: function(response) {
            var _optionListLayout = '<option value=""><?php echo app('translator')->get("Please select"); ?></option>';
            var _optionListStyle = '<option value=""><?php echo app('translator')->get("Please select"); ?></option>';
            if (response.data != null) {
              let json_params = JSON.parse(response.data);
              if (json_params.hasOwnProperty('layout')) {
                Object.entries(json_params.layout).forEach(([key, value]) => {
                  _optionListLayout += '<option value="' + value + '"> ' + value + ' </option>';
                });
              }
              _targetLayout.html(_optionListLayout);
              if (json_params.hasOwnProperty('style')) {
                Object.entries(json_params.style).forEach(([key, value]) => {
                  _optionListStyle += '<option value="' + value + '"> ' + value + ' </option>';
                });
              }
              _targetStyle.html(_optionListStyle);
            }
            $(".select2").select2();
          },
          error: function(response) {
            // Get errors
            var errors = response.responseJSON.message;
            console.log(errors);
          }
        });
      });
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/admin/pages/block_contents/edit.blade.php ENDPATH**/ ?>