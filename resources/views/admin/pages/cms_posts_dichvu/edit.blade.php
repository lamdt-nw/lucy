@extends('admin.layouts.app')

@section('title')
  {{ $module_name }}
@endsection

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{ $module_name }}
      <a class="btn btn-sm btn-warning pull-right" href="{{ route(Request::segment(2) . '.create') }}"><i
          class="fa fa-plus"></i> @lang('Add')</a>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    @if (session('errorMessage'))
      <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session('errorMessage') }}
      </div>
    @endif
    @if (session('successMessage'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session('successMessage') }}
      </div>
    @endif

    @if ($errors->any())
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        @foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach

      </div>
    @endif
    @php
    $array_location = APP\Consts::POST_POSITION;
    @endphp
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">@lang('Update form')</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="{{ route(Request::segment(2) . '.update', $detail->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="box-body">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              @foreach($languages as $key_lang => $lang)
              <li class="<?php if($key_lang == 0) { echo 'active'; } ?>">
                <a href="#tab_{{ $key_lang }}" data-toggle="tab">
                  <h5>Thông tin {{ $lang->title }} <span class="text-danger">*</span></h5>
                </a>
              </li>
              @endforeach
              
              <button type="submit" class="btn btn-primary pull-right btn-sm mg-5" id="capnhat" name="submit" value="news_edit">Cập nhật</button>
              
            </ul>

            <div class="tab-content">
              @foreach($languages as $key_la => $lang_tab)
              @php
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
              @endphp
                <div class="tab-pane <?php if($key_la == 0) { echo 'active'; } ?>" id="tab_{{ $key_la }}">
                  <div class="row" id="info_general">
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <div class="form-group">
                          <label>@lang('Content') {{ $lang_tab->title }}:</label>
                          <textarea name="content[{{ $lang_tab->lang_code }}]" class="form-control" id="content_{{ $lang_tab->lang_code }}">{{ $content }}</textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label>@lang('Tiêu đề') {{ $lang_tab->title }} <small class="text-red">*</small></label>
                        <input type="text" class="form-control" maxlength="160" 
                        id="txtTitle_{{ $lang_tab->lang_code }}" 
                        onchange="demKytu('txtTitle_{{ $lang_tab->lang_code }}','remainingInput_text_{{ $lang_tab->lang_code }}');getUrlPart('txtTitle_{{ $lang_tab->lang_code }}','txtUrlPart_{{ $lang_tab->lang_code }}')" 
                        onclick="demKytu('txtTitle_{{ $lang_tab->lang_code }}','remainingInput_text_{{ $lang_tab->lang_code }}');getUrlPart('txtTitle_{{ $lang_tab->lang_code }}','txtUrlPart_{{ $lang_tab->lang_code }}')" 
                        onblur="demKytu('txtTitle_{{ $lang_tab->lang_code }}','remainingInput_text_{{ $lang_tab->lang_code }}');getUrlPart('txtTitle_{{ $lang_tab->lang_code }}','txtUrlPart_{{ $lang_tab->lang_code }}')" 
                        name="title[{{ $lang_tab->lang_code }}]" 
                        placeholder="@lang('Title') {{ $lang_tab->title }}"  required value="{{ $title }}">
                          <span id='remainingInput_text_{{ $lang_tab->lang_code }}' class="note pull-right">{{ mb_strlen($title) }}/160</span>
                      </div>
                      <div class="form-group">
                        <label>@lang('Mô tả') {{ $lang_tab->title }}</label>
                        <textarea name="brief[{{ $lang_tab->lang_code }}]" 
                          id="description_{{ $lang_tab->lang_code }}" maxlength="255" 
                          onkeyup="demKytu('description_{{ $lang_tab->lang_code }}','remainingInput_textarea_{{ $lang_tab->lang_code }}');" 
                          onblur="demKytu('description_{{ $lang_tab->lang_code }}','remainingInput_textarea_{{ $lang_tab->lang_code }}');" 
                          onclick="demKytu('description_{{ $lang_tab->lang_code }}','remainingInput_textarea_{{ $lang_tab->lang_code }}');"  
                          class="form-control" rows="5">{{ $brief }}</textarea>
                          <span id='remainingInput_textarea_{{ $lang_tab->lang_code }}' class="note pull-right">{{ mb_strlen($brief) }}/255</span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <hr style="border-top: dashed 2px #a94442; margin: 10px 0px;">
                    </div>

                  </div>
                </div>
              @endforeach

              <div class="tab">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>@lang('alias') <small class="text-red">*</small></label>
                      <input type="text" class="form-control" id="txtUrlPart_{{ $locale }}" onchange="getUrlPart('txtUrlPart_{{ $locale }}','txtUrlPart_{{ $locale }}')" onclick="getUrlPart('txtUrlPart_{{ $locale }}','txtUrlPart_{{ $locale }}')" onblur="getUrlPart('txtUrlPart_{{ $locale }}','txtUrlPart_{{ $locale }}')" name="url_part" placeholder="@lang('Alias')"
                        value="{{ $detail->url_part }}" required readonly>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>@lang('Danh mục') <small class="text-red">*</small></label>
                      <select name="taxonomy_id" id="taxonomy_id" class="form-control select2" style="width: 100%">
                        
                        @foreach ($parents as $item)
                          @if ($item->parent_id == 0 || $item->parent_id == null)
                            <option value="{{ $item->id }}" {{ $detail->taxonomy_id == $item->id ? 'selected' : '' }}>
                              {{ $item->title->$locale }}</option>

                            @foreach ($parents as $sub)
                              @if ($item->id == $sub->parent_id)
                                <option value="{{ $sub->id }}"
                                  {{ $detail->taxonomy_id == $sub->id ? 'selected' : '' }}>- - {{ $sub->title->$locale }}
                                </option>

                                @foreach ($parents as $sub_child)
                                  @if ($sub->id == $sub_child->parent_id)
                                    <option value="{{ $sub_child->id }}"
                                      {{ $detail->taxonomy_id == $sub_child->id ? 'selected' : '' }}>- - - -
                                      {{ $sub_child->title->$locale }}</option>
                                  @endif
                                @endforeach
                              @endif
                            @endforeach
                          @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group hidden">
                      <label>@lang('Chọn loại tin') <small class="text-red">*</small></label>
                      <select name="news_position" class="form-control" id="news_position">
                        @foreach($array_location as $key=>$position_text)
                        <option value="{{ $key }}" {{ $detail->news_position == $key ? 'selected' : '' }}>{{ $position_text }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>@lang('Ảnh đại diện')</label>
                      <div class="input-group">
                        <span class="input-group-btn">
                          <a data-input="image" onclick="openPopupImg('image')" data-preview="image-holder" class="btn btn-primary lfm"
                            data-type="cms-image">
                            <i class="fa fa-picture-o"></i> @lang('choose')
                          </a>
                        </span>
                        <input id="image" class="form-control" type="text" name="image"
                          placeholder="@lang('image_link')..." value="{{ $detail->image }}">
                      </div>
                      <div id="image-holder" style="margin-top:15px;max-height:100px;">
                        @if ($detail->image != '')
                          <img id="view_image" style="height: 5rem;" src="{{ $detail->image }}">
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>@lang('Danh sách hình ảnh')</label>
                      <div class="input-group">
                        <span class="input-group-btn">
                          <a data-input="image_list" onclick="openPopupMultiImg('image_list')" data-preview="image_list-holder" class="btn btn-primary"
                            data-type="cms-image">
                            <i class="fa fa-picture-o"></i> @lang('choose')
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group" id="frames">
                      <?php $i = 0;
                      $json_image = $detail->image_list;
                      $images = explode(';', trim($json_image, ''));
                      $index_image = count($images);
                      if($json_image != ''){
                        foreach ($images as $key => $image) {
                            $i++;
                            ?>
                            <div class="form-group" id ="<?= $key?>">
                                <div class="col-md-8" style="padding-left:0px;">
                                    <input class="form-control" type="text" readonly name="image_list[<?= $key?>]" id="imagelist_<?= $key?>" txthide="imagelist_<?= $key?>" placeholder="Đường dẫn <?= $key?> cho sản phẩm" value="<?= $image ?>" />
                                </div>
                                <div class="col-md-2" style="padding-left:0px;">
                                    <input class="btn btn-info form-control" onclick="openPopupImg2(<?= $key?>)" txthide="imagelist_<?= $key?>" type="button" value="Chọn file <?= $key?>" name="imageadd[<?= $key?>]" id="imageadd_<?= $key?>" />
                                </div>

                                <div class="col-md-2" style="padding-left:0px;">
                                    <input class="btn btn-danger form-control"  onclick="delete_img(<?= $key?>)" value="Xóa <?= $key?>"/>
                                </div>
                            </div>

                      <?php } } ?>
                    </div>
                  </div>

                  <div class="col-md-4 hidden">
                    <div class="form-group">
                      <label>@lang('Mã nhúng video yotube')</label>
                      <input type="text" class="form-control" id="iframe_video" name="iframe_video" placeholder="@lang('Mã nhúng video')"
                        value="{{ $detail->iframe_video }}">
                    </div>
                  </div>
                </div> <!-- end class row -->
              </div>
            </div><!-- /.tab-content -->
          </div><!-- nav-tabs-custom -->

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
      <a class="btn btn-success btn-sm" href="{{ route(Request::segment(2) . '.index') }}">
        <i class="fa fa-bars"></i> @lang('List')
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
@endsection

@section('script')
<script>
  <?php if($index_image > 0) { ?>
    var index = <?= $index_image?>;
  <?php }else{ ?>
    var index = 0;
  <?php } ?>

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
                              // '<div class="col-md-2" style="padding-left:0px;">' +
                              // '<image id="srcImage_'+ index +'" src="'+ file.getUrl() +'" style="height:100px; width:100%;" />'+
                              // '</div>' +
                              '<div class="col-md-8" style="padding-left:0px;">' +
                              '<input class="form-control" type="text" readonly name="image_list['+ index +']" id="imagelist_'+ index +'" txthide="imagelist_'+ index +'" ondblclick="fcall.fcChoiceImg(this);" placeholder="Đường dẫn '+ index +'" value="'+ file.getUrl() +'" />' +
                              '</div>' +
                              '<div class="col-md-2" style="padding-left:0px;">' +
                              '<input class="btn btn-info form-control" onclick="openPopupImg2('+ index +')" txthide="imagelist_'+ index +'" type="button" value="Chọn file '+ index +'" name="imageadd['+ index +']" id="imageadd_'+ index +'" />' +
                              '</div>' +

                              '<div class="col-md-2" style="padding-left:0px;">' +
                              '<input class="btn btn-danger form-control"  onclick="delete_img('+ index +')" value="Xóa '+ index +'"/>' +
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
  function openPopupImg2(id) {
    CKFinder.popup( {
        chooseFiles: true,
        onInit: function( finder ) {
            finder.on( 'files:choose', function( evt ) {
                var file = evt.data.files.first();
                console.log(evt.data.files);

                document.getElementById( "imagelist_" + id ).value = file.getUrl();
                // document.getElementById( "srcImage_" + id ).src = file.getUrl();


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
</script>

<script>
  @foreach($languages as $lang)
    CKEDITOR.replace('content_{{ $lang->lang_code }}', ck_options);
  @endforeach
</script>

@endsection
