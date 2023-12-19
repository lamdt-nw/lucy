

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
        <h3 class="box-title"><?php echo app('translator')->get('Create form'); ?></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="<?php echo e(route(Request::segment(2) . '.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
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
                <div class="tab-pane <?php if($key_la == 0) { echo 'active'; } ?>" id="tab_<?php echo e($key_la); ?>">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label><?php echo app('translator')->get('Title'); ?> <?php echo e($lang_tab->title); ?><small class="text-red">*</small></label>
                        <input type="text" class="form-control" name="title[<?php echo e($lang_tab->lang_code); ?>]" placeholder="<?php echo app('translator')->get('Title'); ?> <?php echo e($lang_tab->title); ?>"
                          value="<?php echo e(old('title')); ?>" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label><?php echo app('translator')->get('Description'); ?> <?php echo e($lang_tab->title); ?></label>
                        <textarea name="brief[<?php echo e($lang_tab->lang_code); ?>]" class="form-control" rows="5"><?php echo e(old('brief')); ?></textarea>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="form-group">
                          <label><?php echo app('translator')->get('Content'); ?> <?php echo e($lang_tab->title); ?></label>
                          <textarea name="content[<?php echo e($lang_tab->lang_code); ?>]" class="form-control" id="content_<?php echo e($lang_tab->lang_code); ?>"><?php echo e(old('content')); ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <hr style="border-top: dashed 2px #a94442; margin: 10px 0px;">
                    </div>
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label><?php echo app('translator')->get('Product category'); ?> <small class="text-red">*</small></label>
                    <select name="taxonomy_id" id="taxonomy_id" class="form-control select2" style="width: 100%">
                      <option value=""><?php echo app('translator')->get('Please select'); ?></option>
                      <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->parent_id == 0 || $item->parent_id == null): ?>
                          <option value="<?php echo e($item->id); ?>" <?php echo e(old('taxonomy_id') == $item->id ? 'selected' : ''); ?>>
                            <?php echo e($item->title->$locale); ?></option>

                          <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item->id == $sub->parent_id): ?>
                              <option value="<?php echo e($sub->id); ?>"
                                <?php echo e(old('taxonomy_id') == $sub->id ? 'selected' : ''); ?>>- - <?php echo e($sub->title->$locale); ?>

                              </option>

                              <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($sub->id == $sub_child->parent_id): ?>
                                  <option value="<?php echo e($sub_child->id); ?>"
                                    <?php echo e(old('taxonomy_id') == $sub_child->id ? 'selected' : ''); ?>>- - - -
                                    <?php echo e($sub_child->title->$locale); ?></option>
                                <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label><?php echo app('translator')->get('Image'); ?></label>
                    <div class="input-group">
                      <span class="input-group-btn">
                        <a data-input="image" onclick="openPopupImg('image')" data-preview="image-holder" class="btn btn-primary lfm"
                          data-type="product">
                          <i class="fa fa-picture-o"></i> <?php echo app('translator')->get('choose'); ?>
                        </a>
                      </span>
                      <input id="image" class="form-control" type="text" name="image"
                        placeholder="<?php echo app('translator')->get('image_link'); ?>...">
                    </div>
                    <div id="image-holder" style="margin-top:15px;max-height:100px;">
                      <?php if(old('image') != ''): ?>
                        <img id="view_image" style="height: 5rem;" src="<?php echo e(old('image')); ?>">
                      <?php endif; ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label><?php echo app('translator')->get('Danh sách hình ảnh'); ?></label>
                    <div class="input-group">
                      <span class="input-group-btn">
                        <a data-input="image_list" onclick="openPopupMultiImg('image_list')" data-preview="image_list-holder" class="btn btn-primary"
                          data-type="cms-image">
                          <i class="fa fa-picture-o"></i> <?php echo app('translator')->get('choose'); ?>
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="form-group" id="frames"></div>
                </div>

                <div class="col-md-6">
                  
                  <div class="form-group">
                    <label><?php echo app('translator')->get('Order'); ?></label>
                    <input type="number" class="form-control" name="iorder" placeholder="<?php echo app('translator')->get('Order'); ?>"
                      value="<?php echo e(old('iorder')); ?>">
                  </div>
                  <div class="form-group">
                    <label><?php echo app('translator')->get('Status'); ?></label>
                    <div class="form-control">
                      <label>
                        <input type="radio" name="status" value="active" checked="">
                        <small><?php echo app('translator')->get('active'); ?></small>
                      </label>
                      <label>
                        <input type="radio" name="status" value="deactive" class="ml-15">
                        <small><?php echo app('translator')->get('deactive'); ?></small>
                      </label>
                    </div>
                  </div>
                  <div class="form-group hidden">
                    <label><?php echo app('translator')->get('Image thumb'); ?></label>
                    <div class="input-group">
                      <span class="input-group-btn">
                        <a data-input="image_thumb" onclick="openPopupImg('image_thumb')" data-preview="image_thumb-holder" class="btn btn-primary lfm"
                          data-type="product">
                          <i class="fa fa-picture-o"></i> <?php echo app('translator')->get('choose'); ?>
                        </a>
                      </span>
                      <input id="image_thumb" class="form-control" type="text" name="image_thumb"
                        placeholder="<?php echo app('translator')->get('image_link'); ?>...">
                    </div>
                    <div id="image_thumb-holder" style="margin-top:15px;max-height:100px;">
                      <?php if(old('image_thumb') != ''): ?>
                        <img id="view_image_thumb" style="height: 5rem;" src="<?php echo e(old('image_thumb')); ?>">
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <hr style="border-top: dashed 2px #a94442; margin: 10px 0px;">
                </div>
              </div>

            </div><!-- /.tab-content -->
          </div><!-- nav-tabs-custom -->

        </div>
        <!-- /.box-body -->

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

<?php $__env->startSection('script'); ?>
<script>
  var index = 0;
  function openPopupMultiImg(id) {
  CKFinder.popup( {
      chooseFiles: true,
      onInit: function( finder ) {
          finder.on( 'files:choose', function( evt ) {

              // update multifile
              var files = evt.data.files;
              files.forEach( function( file, i ) {

                  $("#frames")
                      .append('<div class="form-group" id ="'+ index +'">' +
                          '<div class="col-md-8" style="padding-left:0px;">' +
                          '<input class="form-control" type="text" readonly name="image_list['+ index +']" id="imagelist_'+ index +'" txthide="imagelist_'+ index +'" placeholder="Đường dẫn '+ index +'" value="'+ file.getUrl() +'" />' +
                          '</div>' +
                          '<div class="col-md-2" style="padding-left:0px;">' +
                          '<input class="btn btn-info form-control" onclick="openPopupImg2('+ index +')" txthide="imagelist_'+ index +'" type="button" value="Chọn file '+ index +'" name="imageadd['+ index +']" id="imageadd_'+ index +'" />' +
                          '</div>' +

                          '<div class="col-md-2" style="padding-left:0px;">' +
                          '<input class="btn btn-danger form-control"  onclick="delete_img('+ index +')" value="Xóa'+ index +'"/>' +
                          '</div>' +
                          '</div>');
                  index++;
              } );
          } );
          finder.on( 'file:choose:resizedImage', function( evt ) {
              document.getElementById( id ).value = evt.data.resizedUrl;
          } );
      }
  } );
}
  function delete_img(id){
      if(confirm("Bạn có muốn xóa")){
          $("#"+id).remove();
          document.getElementById('remove').value  += ","+id;
      }
  }
   function openPopupImg2(id) {
      CKFinder.popup( {
          chooseFiles: true,
          onInit: function( finder ) {
              finder.on( 'files:choose', function( evt ) {
                  var file = evt.data.files.first();
                  console.log(evt.data.files);

                  document.getElementById( "imagelist_" + id ).value = file.getUrl();


              } );
              finder.on( 'file:choose:resizedImage', function( evt ) {
                  document.getElementById( id ).value = evt.data.resizedUrl;
              } );
          }
      } );
  }
</script>

<script>
  <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    CKEDITOR.replace('content_<?php echo e($lang->lang_code); ?>', ck_options);
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</script>


<style>
  div.ck-editor__editable {
    height: 705px !important;
    overflow: scroll;
  }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/admin/pages/introduction/create.blade.php ENDPATH**/ ?>