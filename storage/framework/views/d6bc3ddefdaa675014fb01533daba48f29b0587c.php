

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
              <button type="submit" class="btn btn-danger pull-right btn-sm mg-5"  name="submit" value="xuatban">Lưu lại</button>
               
            </ul>

            <div class="tab-content">
              <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_la => $lang_tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="tab-pane <?php if($key_la == 0) { echo 'active'; } ?>" id="tab_<?php echo e($key_la); ?>">
                  <div class="row" id="info_general">
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <div class="form-group">
                          <label><?php echo app('translator')->get('Content'); ?> <?php echo e($lang_tab->title); ?>:</label>
                          <textarea name="content[<?php echo e($lang_tab->lang_code); ?>]" class="form-control" id="content_<?php echo e($lang_tab->lang_code); ?>"></textarea>
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
                        placeholder="<?php echo app('translator')->get('Title'); ?> <?php echo e($lang_tab->title); ?>"  required>
                          <span id='remainingInput_text_<?php echo e($lang_tab->lang_code); ?>' class="note pull-right"><?php echo e(mb_strlen(old('title'))); ?>/160</span>
                      </div>
                      <div class="form-group">
                        <label><?php echo app('translator')->get('Mô tả'); ?> <?php echo e($lang_tab->title); ?></label>
                        <textarea name="brief[<?php echo e($lang_tab->lang_code); ?>]" 
                          id="description_<?php echo e($lang_tab->lang_code); ?>" maxlength="255" 
                          onkeyup="demKytu('description_<?php echo e($lang_tab->lang_code); ?>','remainingInput_textarea_<?php echo e($lang_tab->lang_code); ?>');" 
                          onblur="demKytu('description_<?php echo e($lang_tab->lang_code); ?>','remainingInput_textarea_<?php echo e($lang_tab->lang_code); ?>');" 
                          onclick="demKytu('description_<?php echo e($lang_tab->lang_code); ?>','remainingInput_textarea_<?php echo e($lang_tab->lang_code); ?>');"  
                          class="form-control" rows="5"><?php echo e(old('brief')); ?></textarea>
                          <span id='remainingInput_textarea_<?php echo e($lang_tab->lang_code); ?>' class="note pull-right"><?php echo e(mb_strlen(old('brief'))); ?>/255</span>
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
                      <input type="text" class="form-control" id="txtUrlPart_<?php echo e($locale); ?>" onchange="getUrlPart('txtUrlPart_<?php echo e($locale); ?>','txtUrlPart_<?php echo e($locale); ?>')" onclick="getUrlPart('txtUrlPart_<?php echo e($locale); ?>','txtUrlPart_<?php echo e($locale); ?>')" onblur="getUrlPart('txtUrlPart_<?php echo e($locale); ?>','txtUrlPart_<?php echo e($locale); ?>')" name="url_part" placeholder="<?php echo app('translator')->get('Alias'); ?>"
                        value="<?php echo e(old('url_part')); ?>" required readonly>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label><?php echo app('translator')->get('Danh mục'); ?> <small class="text-red">*</small></label>
                      <select name="taxonomy_id" id="taxonomy_id" class="form-control select2" style="width: 100%">
                        
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
                  </div>
                  <div class="col-md-4 hidden">
                    <div class="form-group">
                      <label><?php echo app('translator')->get('Chọn loại tin'); ?> <small class="text-red">*</small></label>
                      <select name="news_position" class="form-control" id="news_position">
                        <?php $__currentLoopData = $array_location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$position_text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>" <?php echo e(old('news_position') == $key ? 'selected' : ''); ?>><?php echo e($position_text); ?></option>
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
                          placeholder="<?php echo app('translator')->get('image_link'); ?>...">
                      </div>
                      <div id="image-holder" style="margin-top:15px;max-height:100px;">
                        <?php if(old('image') != ''): ?>
                        <img id="view_image" style="height: 5rem;" src="<?php echo e(old('image')); ?>">
                        <?php else: ?>
                        <img id="view_image" style="height: 5rem;" src="">
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
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
                  </div>
                  <div class="col-md-8">
                    <div class="form-group" id="frames"></div>
                  </div>

                  <div class="col-md-4 hidden">
                    <div class="form-group">
                      <label><?php echo app('translator')->get('Mã nhúng video yotube'); ?></label>
                      <input type="text" class="form-control" id="iframe_video" name="iframe_video" placeholder="<?php echo app('translator')->get('Mã nhúng video'); ?>"
                        value="<?php echo e(old('iframe_video')); ?>">
                    </div>
                  </div>
                  <div class="form-group hidden">
                    <label><?php echo app('translator')->get('seo_title'); ?></label>
                    <input id="txtSeoTitle" maxlength="160" name="seo_title" class="form-control" value="<?php echo e(old('seo_title')); ?>"
                      onkeyup="demKytu('txtSeoTitle','remainingInput_seoTitle');" onblur="demKytu('txtSeoTitle','remainingInput_seoTitle');" onclick="demKytu('txtSeoTitle','remainingInput_seoTitle');">
                      <span id='remainingInput_seoTitle' class="note pull-right"><?php echo e(mb_strlen(old('seo_title'))); ?>/160</span>
                  </div>
                  <div class="form-group hidden">
                    <label><?php echo app('translator')->get('seo_keyword'); ?></label>
                    <input id="txtSeoKeyword" maxlength="255" name="seo_keyword" class="form-control" value="<?php echo e(old('seo_keyword')); ?>"
                    onkeyup="demKytu('txtSeoKeyword','remainingInput_seoKeyword');" onblur="demKytu('txtSeoKeyword','remainingInput_seoKeyword');" onclick="demKytu('txtSeoKeyword','remainingInput_seoKeyword');">
                      <span id='remainingInput_seoKeyword' class="note pull-right"><?php echo e(mb_strlen(old('seo_keyword'))); ?>/255</span>
                  </div>
                  <div class="form-group hidden">
                    <label><?php echo app('translator')->get('seo_description'); ?></label>
                    <input id="txtSeoDescription" maxlength="255" name="seo_description" class="form-control" value="<?php echo e(old('seo_description')); ?>" 
                    onkeyup="demKytu('txtSeoDescription','remainingInput_seoDescription');" onblur="demKytu('txtSeoDescription','remainingInput_seoDescription');" onclick="demKytu('txtSeoDescription','remainingInput_seoDescription');">
                      <span id='remainingInput_seoDescription' class="note pull-right"><?php echo e(mb_strlen(old('seo_description'))); ?>/255</span>
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
          
            <button type="submit" class="btn btn-danger pull-right btn-sm mg-5"  name="submit" value="xuatban">Lưu lại</button>
          
        </div>
      </form>
    </div>
  </section>
<script type="text/javascript">
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

<script>

    
  function searchPost(){
    var keyword = $('#keyword').val();
    
    $.ajax({
      url: '<?php echo e(route('cms_posts.post_relative')); ?>',
      type: 'POST',
      data: {
      _token: '<?php echo e(csrf_token()); ?>',
      keyword: keyword
      },
      context: document.body,
    }).done(function(data) {
      $('#dataTablePost').html(data);
    });
  }

  function getContent(){
    var url_craw = $("#crawl").val();
    $('#ic-loading').show();
    //alert(url_craw);
    $.ajax({
      url: '<?php echo e(route('cms_posts.load_crawler')); ?>',
      type: 'POST',
      data: {
      _token: '<?php echo e(csrf_token()); ?>',
      url_craw: url_craw
      },
      context: document.body,
    }).done(function(data) {
      $('#ic-loading').hide();
      $('#info_general').html(data);
    });
  } 
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/admin/pages/cms_posts_dichvu/create.blade.php ENDPATH**/ ?>