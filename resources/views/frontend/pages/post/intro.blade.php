@extends('frontend.layouts.default')

@php

$seo_title = $taxonomy->title->$locale ?? null;
$seo_keyword = $taxonomy->meta_keyword ?? null;
$seo_description = $taxonomy->content->$locale ?? null;
$image_background = $taxonomy->image ? 'background-image: url('.$taxonomy->image.')' : '';

@endphp

@section('content')

<link rel='stylesheet' href={{ asset('themes/frontend/lucy/wp-content/uploads/elementor/css/post-726.css?ver=1702740145')}} media='all' />
<style>
  /*! elementor-pro - v3.14.0 - 26-06-2023 */ .elementor-gallery__container{min-height:1px}.elementor-gallery-item{position:relative;overflow:hidden;display:block;text-decoration:none;border:solid
  var(--image-border-width) var(--image-border-color);border-radius:var(--image-border-radius)}.elementor-gallery-item__content,.elementor-gallery-item__overlay{height:100%;width:100%;position:absolute;top:0;left:0}.elementor-gallery-item__overlay{mix-blend-mode:var(--overlay-mix-blend-mode);transition-duration:var(--overlay-transition-duration);transition-property:mix-blend-mode,transform,opacity,background-color}.elementor-gallery-item__image.e-gallery-image{transition-duration:var(--image-transition-duration);transition-property:filter,transform}.elementor-gallery-item__content{display:flex;flex-direction:column;justify-content:var(--content-justify-content,center);align-items:center;text-align:var(--content-text-align);padding:var(--content-padding)}.elementor-gallery-item__content>div{transition-duration:var(--content-transition-duration)}.elementor-gallery-item__content.elementor-gallery--sequenced-animation>div:nth-child(2){transition-delay:calc(var(--content-transition-delay)
  / 3)}.elementor-gallery-item__content.elementor-gallery--sequenced-animation>div:nth-child(3){transition-delay:calc(var(--content-transition-delay)
  / 3 * 2)}.elementor-gallery-item__content.elementor-gallery--sequenced-animation>div:nth-child(4){transition-delay:calc(var(--content-transition-delay)
  / 3 * 3)}.elementor-gallery-item__description{color:var(--description-text-color,#fff);width:100%}.elementor-gallery-item__title{color:var(--title-text-color,#fff);font-weight:700;width:100%}.elementor-gallery__titles-container{display:flex;flex-wrap:wrap;justify-content:var(--titles-container-justify-content,center);margin-bottom:20px}.elementor-gallery__titles-container:not(.e--pointer-framed)
  .elementor-item:after,.elementor-gallery__titles-container:not(.e--pointer-framed)
  .elementor-item:before{background-color:var(--galleries-pointer-bg-color-hover)}.elementor-gallery__titles-container:not(.e--pointer-framed)
  .elementor-item.elementor-item-active:after,.elementor-gallery__titles-container:not(.e--pointer-framed)
  .elementor-item.elementor-item-active:before{background-color:var(--galleries-pointer-bg-color-active)}.elementor-gallery__titles-container.e--pointer-framed
  .elementor-item:before{border-color:var(--galleries-pointer-bg-color-hover);border-width:var(--galleries-pointer-border-width)}.elementor-gallery__titles-container.e--pointer-framed
  .elementor-item:after{border-color:var(--galleries-pointer-bg-color-hover)}.elementor-gallery__titles-container.e--pointer-framed
  .elementor-item.elementor-item-active:after,.elementor-gallery__titles-container.e--pointer-framed
  .elementor-item.elementor-item-active:before{border-color:var(--galleries-pointer-bg-color-active)}.elementor-gallery__titles-container.e--pointer-framed.e--animation-draw
  .elementor-item:before{border-left-width:var(--galleries-pointer-border-width);border-bottom-width:var(--galleries-pointer-border-width);border-right-width:0;border-top-width:0}.elementor-gallery__titles-container.e--pointer-framed.e--animation-draw
  .elementor-item:after{border-left-width:0;border-bottom-width:0;border-right-width:var(--galleries-pointer-border-width);border-top-width:var(--galleries-pointer-border-width)}.elementor-gallery__titles-container.e--pointer-framed.e--animation-corners
  .elementor-item:before{border-left-width:var(--galleries-pointer-border-width);border-bottom-width:0;border-right-width:0;border-top-width:var(--galleries-pointer-border-width)}.elementor-gallery__titles-container.e--pointer-framed.e--animation-corners
  .elementor-item:after{border-left-width:0;border-bottom-width:var(--galleries-pointer-border-width);border-right-width:var(--galleries-pointer-border-width);border-top-width:0}.elementor-gallery__titles-container
  .e--pointer-double-line .elementor-item:after,.elementor-gallery__titles-container
  .e--pointer-double-line .elementor-item:before,.elementor-gallery__titles-container
  .e--pointer-overline .elementor-item:before,.elementor-gallery__titles-container
  .e--pointer-underline .elementor-item:after{height:var(--galleries-pointer-border-width)}.elementor-gallery-title{--space-between:10px;cursor:pointer;color:#6d7882;font-weight:500;position:relative;padding:7px
  14px;transition:all .3s}.elementor-gallery-title--active{color:#495157}.elementor-gallery-title:not(:last-child){margin-right:var(--space-between)}.elementor-gallery-item__title+.elementor-gallery-item__description{margin-top:var(--description-margin-top)}.e-gallery-item.elementor-gallery-item{transition-property:all}.e-gallery-item.elementor-animated-content
  .elementor-animated-item--enter-from-bottom,.e-gallery-item.elementor-animated-content
  .elementor-animated-item--enter-from-left,.e-gallery-item.elementor-animated-content
  .elementor-animated-item--enter-from-right,.e-gallery-item.elementor-animated-content
  .elementor-animated-item--enter-from-top,.e-gallery-item:focus .elementor-gallery__item-overlay-bg,.e-gallery-item:focus
  .elementor-gallery__item-overlay-content,.e-gallery-item:focus .elementor-gallery__item-overlay-content__description,.e-gallery-item:focus
  .elementor-gallery__item-overlay-content__title,.e-gallery-item:hover .elementor-gallery__item-overlay-bg,.e-gallery-item:hover
  .elementor-gallery__item-overlay-content,.e-gallery-item:hover .elementor-gallery__item-overlay-content__description,.e-gallery-item:hover
  .elementor-gallery__item-overlay-content__title{opacity:1}a.elementor-item.elementor-gallery-title{color:var(--galleries-title-color-normal)}a.elementor-item.elementor-gallery-title.elementor-item-active,a.elementor-item.elementor-gallery-title.highlighted,a.elementor-item.elementor-gallery-title:focus,a.elementor-item.elementor-gallery-title:hover{color:var(--galleries-title-color-hover)}a.elementor-item.elementor-gallery-title.elementor-item-active{color:var(--gallery-title-color-active)}.e-con-inner>.elementor-widget-gallery,.e-con>.elementor-widget-gallery{width:var(--container-widget-width);--flex-grow:var(--container-widget-flex-grow)}
</style>
<style>
  /*! elementor - v3.15.0 - 02-08-2023 */ .elementor-widget-text-editor.elementor-drop-cap-view-stacked
  .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed
  .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default)
  .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default)
  .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor
  .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor
  .elementor-drop-cap-letter{display:inline-block}
</style>
<style>
  /*! elementor - v3.15.0 - 02-08-2023 */ .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading
  .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading
  .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading
  .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading
  .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading
  .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading
  .elementor-heading-title.elementor-size-xxl{font-size:59px}
</style>
<style>
  .elementor-726 .elementor-element.elementor-element-392deb9f:not(.elementor-motion-effects-element-type-background) {
    background-image: url({{ $taxonomy->json_params->image_background }});
}
</style>
<div data-elementor-type="wp-page" data-elementor-id="726" class="elementor elementor-726 elementor-168"
data-elementor-post-type="page">
  <section class="elementor-section elementor-top-section elementor-element elementor-element-392deb9f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
  data-id="392deb9f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-background-overlay">
    </div>
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4996e443"
      data-id="4996e443" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-5b8b1e76 elementor-widget elementor-widget-heading"
          data-id="5b8b1e76" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
              <h1 class="elementor-heading-title elementor-size-default">
                {{$array_translate[strtolower('About Us')]->$locale }}
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @foreach($post as $key => $item)
    @if($item->image_list == '')
      <div class="elementor-element elementor-element-282070a e-flex e-con-boxed e-con"
      data-id="282070a" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
        <div class="e-con-inner">
          <div class="elementor-element elementor-element-89b1754 e-con-full e-flex e-con"
          data-id="89b1754" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-aa2bf81 elementor-widget elementor-widget-image"
            data-id="aa2bf81" data-element_type="widget" data-widget_type="image.default">
              <div class="elementor-widget-container">
                <img decoding="async" width="600" height="400" src="{{ $item->image }}"
                class="attachment-full size-full wp-image-2469" alt="" srcset="{{ $item->image }}"
                sizes="(max-width: 600px) 100vw, 600px" />
              </div>
            </div>
          </div>
          <div class="elementor-element elementor-element-8ec54f5 e-con-full e-flex e-con"
          data-id="8ec54f5" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-04f6f44 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
            data-id="04f6f44" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
            data-widget_type="image.default">
              <div class="elementor-widget-container">
                {{-- <img decoding="async" width="437" height="418" src="https://lucybeauty.ca/wp-content/uploads/2023/06/jasmine-flowers-white2.png"
                class="attachment-large size-large wp-image-733" alt="" srcset="https://lucybeauty.ca/wp-content/uploads/2023/06/jasmine-flowers-white2.png 437w, https://lucybeauty.ca/wp-content/uploads/2023/06/jasmine-flowers-white2-300x287.png 300w"
                sizes="(max-width: 437px) 100vw, 437px" /> --}}
              </div>
            </div>
            <div class="elementor-element elementor-element-dc2562a elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
            data-id="dc2562a" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
            data-widget_type="image.default">
              <div class="elementor-widget-container">
                {{-- <img loading="lazy" decoding="async" width="674" height="620" src="https://lucybeauty.ca/wp-content/uploads/2023/06/elements-line-drawing-white-jasmine-flower-illustrations-FF57E82-2020-06-29-2.png"
                class="attachment-large size-large wp-image-28" alt="" srcset="https://lucybeauty.ca/wp-content/uploads/2023/06/elements-line-drawing-white-jasmine-flower-illustrations-FF57E82-2020-06-29-2.png 674w, https://lucybeauty.ca/wp-content/uploads/2023/06/elements-line-drawing-white-jasmine-flower-illustrations-FF57E82-2020-06-29-2-600x552.png 600w, https://lucybeauty.ca/wp-content/uploads/2023/06/elements-line-drawing-white-jasmine-flower-illustrations-FF57E82-2020-06-29-2-300x276.png 300w"
                sizes="(max-width: 674px) 100vw, 674px" /> --}}
              </div>
            </div>
            <div class="elementor-element elementor-element-0dea37a elementor-widget elementor-widget-heading"
            data-id="0dea37a" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">
                  {{ $item->title->$locale }}
                </h2>
              </div>
            </div>
            <div class="elementor-element elementor-element-d613d20 elementor-widget elementor-widget-heading"
            data-id="d613d20" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <div class="elementor-heading-title elementor-size-default">
                  {{ $item->brief->$locale }}
                </div>
              </div>
            </div>
            <div class="elementor-element elementor-element-26db0bf elementor-widget elementor-widget-text-editor"
            data-id="26db0bf" data-element_type="widget" data-widget_type="text-editor.default">
              <div class="elementor-widget-container">
                
                <p>
                  {!! $item->content->$locale !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  @else
    <div class="elementor-element elementor-element-cb8d1d0 e-flex e-con-boxed e-con"
    data-id="cb8d1d0" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
      <div class="e-con-inner">
        <div class="elementor-element elementor-element-68d16b3 elementor-widget elementor-widget-heading"
        data-id="68d16b3" data-element_type="widget" data-widget_type="heading.default">
          <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">
              {{ $item->title->$locale }}
            </h2>
          </div>
        </div>
        <div class="elementor-element elementor-element-6fcbfbb elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
        data-id="6fcbfbb" data-element_type="widget" data-widget_type="text-editor.default">
          <div class="elementor-widget-container">
            <p>
              {!! $item->content->$locale !!}
            </p>
          </div>
        </div>
        <div class="elementor-element elementor-element-6e2b3b2 elementor-widget elementor-widget-gallery"
        data-id="6e2b3b2" data-element_type="widget" data-settings="{&quot;columns&quot;:3,&quot;aspect_ratio&quot;:&quot;4:3&quot;,&quot;lazyload&quot;:&quot;yes&quot;,&quot;gallery_layout&quot;:&quot;grid&quot;,&quot;columns_tablet&quot;:2,&quot;columns_mobile&quot;:1,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;overlay_background&quot;:&quot;yes&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}"
        data-widget_type="gallery.default">
          <div class="elementor-widget-container">
            
            <div class="elementor-gallery__container">
              @php
              $json_image = $item->image_list;
              $images = explode(';', trim($json_image, ''));
              @endphp
              @foreach($images as $key_img => $image)
                <a class="e-gallery-item elementor-gallery-item elementor-animated-content"
                href="{{ $image }}"
                data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="6e2b3b2"
                data-elementor-lightbox-title="{{ $item->title->$locale }}"
                data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjQ3NiwidXJsIjoiaHR0cHM6XC9cL2x1Y3liZWF1dHkuY2FcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzA4XC8wREEwQkJFNC05MkYyLTREREEtQUMyOC00MERFMUQzMEU1RkQtMjQ1NDktMDAwMDE3OThGRUFCNzZEOS5qcGciLCJzbGlkZXNob3ciOiI2ZTJiM2IyIn0%3D">
                  <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ $image }}"
                  data-width="600" data-height="900" aria-label="" role="img">
                  </div>
                  <div class="elementor-gallery-item__overlay">
                  </div>
                </a>
              @endforeach
            </div>
          </div>
        </div>
        <div class="elementor-element elementor-element-34431aa elementor-widget__width-auto animated-slow elementor-invisible elementor-widget elementor-widget-button"
        data-id="34431aa" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:900}"
        data-widget_type="button.default">
          <div class="elementor-widget-container">
            <div class="elementor-button-wrapper">
              <a class="elementor-button elementor-button-link elementor-size-sm" href="{{ $web_information->social->instagram ?? '' }}" target="_blank">
                <span class="elementor-button-content-wrapper">
                  <span class="elementor-button-text">
                    {{$array_translate[strtolower('View more')]->$locale }}
                  </span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
  @endforeach

  @include('frontend.element.why_diffirent')

  @include('frontend.element.booking')

  <div class="elementor-element elementor-element-870fbee e-flex e-con-boxed e-con"
  data-id="870fbee" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
    <div class="e-con-inner">
    </div>
  </div>
</div>

@endsection

