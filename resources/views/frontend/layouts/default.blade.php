<!doctype html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  @php
    $seo_title = $seo_title ?? ($page->title ?? ($web_information->information->seo_title ?? ''));
    $seo_keyword = $seo_keyword ?? ($page->keyword ?? ($web_information->information->seo_keyword ?? ''));
    $seo_description = $seo_description ?? ($page->description ?? ($web_information->information->seo_description ?? ''));
  @endphp
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <title>{{ $seo_title }}</title>
  <meta name='robots' content='max-image-preview:large' />
  <meta name="copyright" content="Copyright" />
  <meta name="title" content="{{ $seo_title }}" />
  <meta name="description" content="{{ $seo_description }}" />
  <meta name="keywords" content="{{ $seo_keyword }}" />
  <link rel="canonical" href="index.html" />
  <link rel='shortlink' href='index.html' />
  <link rel="icon" href="{{ $web_information->image->favicon ?? '' }}" sizes="32x32" />
  <link rel="icon" href="{{ $web_information->image->favicon ?? '' }}" sizes="192x192" />
  <link rel="apple-touch-icon" href="{{ $web_information->image->favicon ?? '' }}" />

  @include('frontend.panels.styles')

</head>
<body class="home page-template page-template-elementor_header_footer page page-id-168 wp-custom-logo theme-hello-elementor woocommerce-no-js ehf-template-hello-elementor ehf-stylesheet-hello-elementor elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-168 et_pb_gutters3">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

    @include('frontend.element.header')

    @yield('content')
        
    @include('frontend.element.footer')

    @include('frontend.panels.scripts')

</body>
</html>
