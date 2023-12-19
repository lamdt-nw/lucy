@extends('frontend.layouts.default')
@section('content')

    <div data-elementor-type="wp-page" data-elementor-id="168" class="elementor elementor-168" data-elementor-post-type="page">

        @include('frontend.element.slide')

        @include('frontend.element.service')

        @include('frontend.element.introduct')

        {{-- @include('frontend.element.subscribe')  --}}

        @include('frontend.element.booking')

        {{-- @include('frontend.element.treatment') --}}
        
        {{-- @include('frontend.element.introduct_2') --}}

        {{-- @include('frontend.element.team') --}}

        @include('frontend.element.comment')

        @include('frontend.element.gallery_image')

        @include('frontend.element.question')

    <div class="elementor-element elementor-element-193a9fe e-flex e-con-boxed e-con" data-id="193a9fe" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
        <div class="e-con-inner">
        </div>
      </div>
    </div>

@yield('content')
@endsection
