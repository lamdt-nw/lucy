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
              <button type="submit" class="btn btn-primary btn-sm pull-right">
                <i class="fa fa-floppy-o"></i>
                @lang('Save')
              </button>
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
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>@lang('Title') {{ $lang_tab->title }}<small class="text-red">*</small></label>
                        <input type="text" class="form-control" name="title[{{ $lang_tab->lang_code }}]" placeholder="@lang('Title') {{ $lang_tab->title }}"
                          value="{{ $title }}" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>@lang('Description') {{ $lang_tab->title }}</label>
                        <textarea name="brief[{{ $lang_tab->lang_code }}]" class="form-control" rows="5">{{ $brief }}</textarea>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="form-group">
                          <label>@lang('Content') {{ $lang_tab->title }}</label>
                          <textarea name="content[{{ $lang_tab->lang_code }}]" class="form-control" id="content_{{ $lang_tab->lang_code }}">{{ $content }}</textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <hr style="border-top: dashed 2px #a94442; margin: 10px 0px;">
                    </div>
                  </div>
                </div>
              @endforeach
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>@lang('Product category') <small class="text-red">*</small></label>
                    <select name="taxonomy_id" id="taxonomy_id" class="form-control select2" style="width: 100%">
                      <option value="">@lang('Please select')</option>
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
                  <div class="form-group">
                    <label>@lang('Image')</label>
                    <div class="input-group">
                      <span class="input-group-btn">
                        <a data-input="image" onclick="openPopupImg ('image')" data-preview="image-holder" class="btn btn-primary lfm"
                          data-type="product">
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

                <div class="col-md-6">
                  
                  <div class="form-group">
                    <label>@lang('Order')</label>
                    <input type="number" class="form-control" name="iorder" placeholder="@lang('Order')"
                      value="{{ $detail->iorder }}">
                  </div>
                  <div class="form-group">
                    <label>@lang('Status')</label>
                    <div class="form-control">
                      <label>
                        <input type="radio" name="status" value="active"
                          {{ $detail->status == 'active' ? 'checked' : '' }}>
                        <small>@lang('active')</small>
                      </label>
                      <label>
                        <input type="radio" name="status" value="deactive"
                          {{ $detail->status == 'deactive' ? 'checked' : '' }} class="ml-15">
                        <small>@lang('deactive')</small>
                      </label>
                    </div>
                  </div>
                  <div class="form-group hidden">
                    <label>@lang('Image thumb')</label>
                    <div class="input-group">
                      <span class="input-group-btn">
                        <a data-input="image_thumb" onclick="openPopupImg('image_thumb')" data-preview="image_thumb-holder" class="btn btn-primary lfm"
                          data-type="product">
                          <i class="fa fa-picture-o"></i> @lang('choose')
                        </a>
                      </span>
                      <input id="image_thumb" class="form-control" type="text" name="image_thumb"
                        placeholder="@lang('image_link')...">
                    </div>
                    <div id="image_thumb-holder" style="margin-top:15px;max-height:100px;">
                      @if (old('image_thumb') != '')
                        <img id="view_image_thumb" style="height: 5rem;" src="{{ old('image_thumb') }}">
                      @endif
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
          <a class="btn btn-success btn-sm" href="{{ route(Request::segment(2) . '.index') }}">
            <i class="fa fa-bars"></i> @lang('List')
          </a>
          <button type="submit" class="btn btn-primary pull-right btn-sm"><i class="fa fa-floppy-o"></i>
            @lang('Save')</button>
        </div>
      </form>
    </div>
  </section>
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

<style>
  div.ck-editor__editable {
    height: 705px !important;
    overflow: scroll;
  }
</style>
@endsection
