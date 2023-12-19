@extends('frontend.layouts.default')

@php

$seo_title = $post->title->$locale ?? null;
$seo_keyword = $post->meta_keyword ?? null;
$seo_description = $post->content->$locale ?? null;
$image_background = $post->image ? 'background-image: url('.$post->image.')' : '';

@endphp

@section('content')

<link rel='stylesheet' href={{ asset('themes/frontend/lucy/wp-content/uploads/elementor/css/post-1853.css?ver=1691380194')}} media='all' />

<main id="content" class="site-main post-1853 page type-page status-publish hentry">
  <div class="page-content">
    <div data-elementor-type="wp-page" data-elementor-id="1853" class="elementor elementor-1853"
    data-elementor-post-type="page">
      <div class="elementor-element elementor-element-44e392b e-flex e-con-boxed e-con"
      data-id="44e392b" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
        <div class="e-con-inner">
          <div class="elementor-element elementor-element-2c72753 elementor-widget elementor-widget-heading"
          data-id="2c72753" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
              <style>
                /*! elementor - v3.15.0 - 02-08-2023 */ .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading
                .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading
                .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading
                .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading
                .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading
                .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading
                .elementor-heading-title.elementor-size-xxl{font-size:59px}
              </style>
              <h2 class="elementor-heading-title elementor-size-default">
                {{ $post->title->$locale }}
              </h2>
            </div>
          </div>
          <div class="elementor-element elementor-element-38bce69 elementor-widget elementor-widget-text-editor"
          data-id="38bce69" data-element_type="widget" data-widget_type="text-editor.default">
            <div class="elementor-widget-container">
              <style>
                /*! elementor - v3.15.0 - 02-08-2023 */ .elementor-widget-text-editor.elementor-drop-cap-view-stacked
                .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed
                .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default)
                .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default)
                .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor
                .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor
                .elementor-drop-cap-letter{display:inline-block}
              </style>
              {!! $post->content->$locale !!}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="post-tags">
    </div>
  </div>
</main>

@endsection

