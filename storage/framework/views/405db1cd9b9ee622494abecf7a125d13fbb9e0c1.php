

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
    <?php
    $array_location = APP\Consts::POST_POSITION;
    ?>
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
              
              <button type="submit" class="btn btn-primary pull-right btn-sm mg-5" id="capnhat" name="submit" value="news_edit">Cập nhật</button>
              
            </ul>

            <div class="tab-content">
              <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_la => $lang_tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php
                $content = $title = $brief = '';
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
              ?>
                <div class="tab-pane <?php if($key_la == 0) { echo 'active'; } ?>" id="tab_<?php echo e($key_la); ?>">
                  <div class="row" id="info_general">
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <div class="form-group">
                          <label><?php echo app('translator')->get('Content'); ?> <?php echo e($lang_tab->title); ?>:</label>
                          <textarea name="content[<?php echo e($lang_tab->lang_code); ?>]" class="form-control" id="content_<?php echo e($lang_tab->lang_code); ?>"><?php echo e($content); ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label><?php echo app('translator')->get('Tiêu đề'); ?> <?php echo e($lang_tab->title); ?> <small class="text-red">*</small></label>
                        <input type="text" class="form-control" maxlength="160" 
                        id="txtTitle_<?php echo e($lang_tab->lang_code); ?>" 
                        onchange="demKytu('txtTitle_<?php echo e($lang_tab->lang_code); ?>','remainingInput_text_<?php echo e($lang_tab->lang_code); ?>');getUrlPart('txtTitle_<?php echo e($lang_tab->lang_code); ?>','txtUrlPart_<?php echo e($lang_tab->lang_code); ?>')" 
                        onclick="demKytu('txtTitle_<?php echo e($lang_tab->lang_code); ?>','remainingInput_text_<?php echo e($lang_tab->lang_code); ?>');getUrlPart('txtTitle_<?php echo e($lang_tab->lang_code); ?>','txtUrlPart_<?php echo e($lang_tab->lang_code); ?>')" 
                        onblur="demKytu('txtTitle_<?php echo e($lang_tab->lang_code); ?>','remainingInput_text_<?php echo e($lang_tab->lang_code); ?>');getUrlPart('txtTitle_<?php echo e($lang_tab->lang_code); ?>','txtUrlPart_<?php echo e($lang_tab->lang_code); ?>')" 
                        name="title[<?php echo e($lang_tab->lang_code); ?>]" 
                        placeholder="<?php echo app('translator')->get('Title'); ?> <?php echo e($lang_tab->title); ?>"  required value="<?php echo e($title); ?>">
                          <span id='remainingInput_text_<?php echo e($lang_tab->lang_code); ?>' class="note pull-right"><?php echo e(mb_strlen($title)); ?>/160</span>
                      </div>
                      <div class="form-group">
                        <label><?php echo app('translator')->get('Mô tả'); ?> <?php echo e($lang_tab->title); ?></label>
                        <textarea name="brief[<?php echo e($lang_tab->lang_code); ?>]" 
                          id="description_<?php echo e($lang_tab->lang_code); ?>" maxlength="255" 
                          onkeyup="demKytu('description_<?php echo e($lang_tab->lang_code); ?>','remainingInput_textarea_<?php echo e($lang_tab->lang_code); ?>');" 
                          onblur="demKytu('description_<?php echo e($lang_tab->lang_code); ?>','remainingInput_textarea_<?php echo e($lang_tab->lang_code); ?>');" 
                          onclick="demKytu('description_<?php echo e($lang_tab->lang_code); ?>','remainingInput_textarea_<?php echo e($lang_tab->lang_code); ?>');"  
                          class="form-control" rows="5"><?php echo e($brief); ?></textarea>
                          <span id='remainingInput_textarea_<?php echo e($lang_tab->lang_code); ?>' class="note pull-right"><?php echo e(mb_strlen($brief)); ?>/255</span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <hr style="border-top: dashed 2px #a94442; margin: 10px 0px;">
                    </div>

                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <div class="tab">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label><?php echo app('translator')->get('alias'); ?> <small class="text-red">*</small></label>
                      <input type="text" class="form-control" id="txtUrlPart_vi" onchange="getUrlPart('txtUrlPart_vi','txtUrlPart_vi')" onclick="getUrlPart('txtUrlPart_vi','txtUrlPart_vi')" onblur="getUrlPart('txtUrlPart_vi','txtUrlPart_vi')" name="url_part" placeholder="<?php echo app('translator')->get('Alias'); ?>"
                        value="<?php echo e($detail->url_part); ?>" required readonly>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label><?php echo app('translator')->get('Danh mục'); ?> <small class="text-red">*</small></label>
                      <select name="taxonomy_id" id="taxonomy_id" class="form-control select2" style="width: 100%">
                        
                        <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($item->parent_id == 0 || $item->parent_id == null): ?>
                            <option value="<?php echo e($item->id); ?>" <?php echo e($detail->taxonomy_id == $item->id ? 'selected' : ''); ?>>
                              <?php echo e($item->title->vi); ?></option>

                            <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($item->id == $sub->parent_id): ?>
                                <option value="<?php echo e($sub->id); ?>"
                                  <?php echo e($detail->taxonomy_id == $sub->id ? 'selected' : ''); ?>>- - <?php echo e($sub->title->vi); ?>

                                </option>

                                <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($sub->id == $sub_child->parent_id): ?>
                                    <option value="<?php echo e($sub_child->id); ?>"
                                      <?php echo e($detail->taxonomy_id == $sub_child->id ? 'selected' : ''); ?>>- - - -
                                      <?php echo e($sub_child->title->vi); ?></option>
                                  <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label><?php echo app('translator')->get('Chọn loại tin'); ?> <small class="text-red">*</small></label>
                      <select name="news_position" class="form-control" id="news_position">
                        <?php $__currentLoopData = $array_location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$position_text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>" <?php echo e($detail->news_position == $key ? 'selected' : ''); ?>><?php echo e($position_text); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label><?php echo app('translator')->get('Ảnh đại diện'); ?></label>
                      <div class="input-group">
                        <span class="input-group-btn">
                          <a data-input="image" onclick="openPopupImg('image')" data-preview="image-holder" class="btn btn-primary lfm"
                            data-type="cms-image">
                            <i class="fa fa-picture-o"></i> <?php echo app('translator')->get('choose'); ?>
                          </a>
                        </span>
                        <input id="image" class="form-control" type="text" name="image"
                          placeholder="<?php echo app('translator')->get('image_link'); ?>..." value="<?php echo e($detail->image); ?>">
                      </div>
                      <div id="image-holder" style="margin-top:15px;max-height:100px;">
                        <?php if($detail->image != ''): ?>
                          <img id="view_image" style="height: 5rem;" src="<?php echo e($detail->image); ?>">
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label><?php echo app('translator')->get('Mã nhúng video yotube'); ?></label>
                      <input type="text" class="form-control" id="iframe_video" name="iframe_video" placeholder="<?php echo app('translator')->get('Mã nhúng video'); ?>"
                        value="<?php echo e($detail->iframe_video); ?>">
                    </div>
                  </div>
                </div> <!-- end class row -->
              </div>
            </div><!-- /.tab-content -->
          </div><!-- nav-tabs-custom -->

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
      <a class="btn btn-success btn-sm" href="<?php echo e(route(Request::segment(2) . '.index')); ?>">
        <i class="fa fa-bars"></i> <?php echo app('translator')->get('List'); ?>
      </a>
      
      <button type="submit" class="btn btn-primary pull-right btn-sm mg-5" id="capnhat" name="submit" value="news_edit">Cập nhật</button>
            
        </div>
      </form>
    </div>
  </section>
<div class="toast" style="display: none">
  <div class="toast-body">
    Thay đổi ảnh đại diện bài viết thành công
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
  <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    CKEDITOR.replace('content_<?php echo e($lang->lang_code); ?>', ck_options);
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vb2kcoqr09ph/chovay.nvoting.com/resources/views/admin/pages/cms_posts_dichvu/edit.blade.php ENDPATH**/ ?>