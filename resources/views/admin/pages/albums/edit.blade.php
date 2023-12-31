@extends('admin.layouts.app')



@section('title')

  {{ $module_name }}

@endsection

@section('style')

  <style>

    .gallery-image {

      cursor: pointer;

    }



    .btn-action {

      position: absolute;

      top: 40%;

      display: none;

      width: calc(100% - 30px);

      text-align: center;

    }



    .img-width {

      width: 100%;

    }



    .mr-5 {

      margin-right: 5px;

    }



    .gallery-image:hover {

      opacity: 0.75;

    }



    .gallery-image img {

      border: 1px dashed #CDCDCD;

    }



    .gallery-image {

      height: 200px;

      overflow: hidden;

    }



  </style>

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

              <li class="active">

                <a href="#tab_1" data-toggle="tab">

                  <h5>Thông tin chính <span class="text-danger">*</span></h5>

                </a>

              </li>

              <button type="submit" class="btn btn-primary btn-sm pull-right">

                <i class="fa fa-floppy-o"></i>

                @lang('Save')

              </button>

            </ul>



            <div class="tab-content">

              <div class="tab-pane active" id="tab_1">

                <div class="row">

                

                  <div class="col-md-6">

                    <div class="form-group">

                      <label>@lang('Title') <small class="text-red">*</small></label>

                      <input type="text" class="form-control" name="title" placeholder="@lang('Title')"

                        value="{{ $detail->title }}" required>

                    </div>

                  </div>

               

                  <div class="col-md-6">

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

                  </div>

                

                  <div class="col-md-6">

                    <div class="form-group">

                      <label>@lang('Vị trí')</label>

                    
                          <select name="vitri" id="vitri" class="form-control select2">

                        {{-- <option value="">@lang('Please select')</option> --}}

                        @foreach (App\Consts::ALBUM_POSITION as $key => $value)


                            <option value="{{ $key }}" {{ $key == $detail->vitri ? 'selected' : '' }}>

                            {{ __($value) }}</option>

                        @endforeach

                      </select>
                       

                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="form-group">

                      <label>@lang('Image')</label>

                      <div class="input-group">

                        <span class="input-group-btn">

                          <a data-input="image" data-preview="image-holder" class="btn btn-primary lfm"

                            data-type="cms-image">

                            <i class="fa fa-picture-o"></i> @lang('choose')

                          </a>

                        </span>

                        <input id="image" class="form-control" type="text" name="image"

                          placeholder="@lang('image_link')..." value="{{ $detail->image }}">

                      </div>

                      <div id="image-holder" style="margin-top:15px;max-height:100px;">

                        @if ($detail->image != '')

                          <img style="height: 5rem;" src="{{ $detail->image }}">

                        @endif

                      </div>

                    </div>

                  </div>

                 
               

                </div>

              </div>

            </div>

          </div>

        </div>



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

    CKEDITOR.replace('content_vi', ck_options);

    CKEDITOR.replace('content_en', ck_options);

  </script>

@endsection

