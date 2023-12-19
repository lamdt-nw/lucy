@extends('frontend.layouts.default')

@php

$seo_title = $taxonomy->title->$locale ?? ($page->title ?? ($page->name ?? ''));
$seo_keyword = $taxonomy->meta_keyword ?? null;
$seo_description = $taxonomy->meta_description ?? null;
$image_background = $taxonomy->image ? 'background-image: url('.$taxonomy->image.')' : '';

@endphp

@section('content')

<link rel='stylesheet' href={{ asset('themes/frontend/lucy/wp-content/uploads/elementor/css/post-1057.css?ver=1692072075')}} media='all' />
<style>
  .elementor-1057 .elementor-element.elementor-element-5ec3f281:not(.elementor-motion-effects-element-type-background) {
      background-image: url({{ $taxonomy->json_params->image_background }});
  }
</style>
<div data-elementor-type="wp-page" data-elementor-id="1057" class="elementor elementor-1057"
data-elementor-post-type="page">
  <section class="elementor-section elementor-top-section elementor-element elementor-element-5ec3f281 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
  data-id="5ec3f281" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-background-overlay">
    </div>
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55b4e91f"
      data-id="55b4e91f" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-12e2312b elementor-widget elementor-widget-heading"
          data-id="12e2312b" data-element_type="widget" data-widget_type="heading.default">
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
              <h1 class="elementor-heading-title elementor-size-default">
                {{$array_translate[strtolower('Contact Us')]->$locale }}
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-27d2828f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
  data-id="27d2828f" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f82205"
      data-id="f82205" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-479308b6 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
          data-id="479308b6" data-element_type="widget" data-widget_type="image-box.default">
            <div class="elementor-widget-container">
              <style>
                /*! elementor - v3.15.0 - 02-08-2023 */ .elementor-widget-image-box .elementor-image-box-content{width:100%}@media
                (min-width:768px){.elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper,.elementor-widget-image-box.elementor-position-right
                .elementor-image-box-wrapper{display:flex}.elementor-widget-image-box.elementor-position-right
                .elementor-image-box-wrapper{text-align:right;flex-direction:row-reverse}.elementor-widget-image-box.elementor-position-left
                .elementor-image-box-wrapper{text-align:left;flex-direction:row}.elementor-widget-image-box.elementor-position-top
                .elementor-image-box-img{margin:auto}.elementor-widget-image-box.elementor-vertical-align-top
                .elementor-image-box-wrapper{align-items:flex-start}.elementor-widget-image-box.elementor-vertical-align-middle
                .elementor-image-box-wrapper{align-items:center}.elementor-widget-image-box.elementor-vertical-align-bottom
                .elementor-image-box-wrapper{align-items:flex-end}}@media (max-width:767px){.elementor-widget-image-box
                .elementor-image-box-img{margin-left:auto!important;margin-right:auto!important;margin-bottom:15px}}.elementor-widget-image-box
                .elementor-image-box-img{display:inline-block}.elementor-widget-image-box
                .elementor-image-box-title a{color:inherit}.elementor-widget-image-box
                .elementor-image-box-wrapper{text-align:center}.elementor-widget-image-box
                .elementor-image-box-description{margin:0}
              </style>
              <div class="elementor-image-box-wrapper">
                <figure class="elementor-image-box-img">
                  <img decoding="async" width="512" height="512" src="https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-24.png"
                  class="elementor-animation-grow attachment-full size-full wp-image-1064"
                  alt="" srcset="https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-24.png 512w, https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-24-300x300.png 300w, https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-24-100x100.png 100w, https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-24-150x150.png 150w"
                  sizes="(max-width: 512px) 100vw, 512px" />
                </figure>
                <div class="elementor-image-box-content">
                  <h3 class="elementor-image-box-title">
                    {{ $web_information->information->hotline ?? '' }}
                  </h3>
                 {{-- <p class="elementor-image-box-description">
                    Call or text
                  </p> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-377db2b0"
      data-id="377db2b0" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-43637946 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
          data-id="43637946" data-element_type="widget" data-widget_type="image-box.default">
            <div class="elementor-widget-container">
              <div class="elementor-image-box-wrapper">
                <figure class="elementor-image-box-img">
                  <img decoding="async" width="512" height="512" src="https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-8.png"
                  class="elementor-animation-grow attachment-full size-full wp-image-1065"
                  alt="" srcset="https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-8.png 512w, https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-8-300x300.png 300w, https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-8-100x100.png 100w, https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-8-150x150.png 150w"
                  sizes="(max-width: 512px) 100vw, 512px" />
                </figure>
                <div class="elementor-image-box-content">
                  <h3 class="elementor-image-box-title">
                    {{ $web_information->information->email ?? '' }}
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2994976f"
      data-id="2994976f" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-5d0b55eb elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box"
          data-id="5d0b55eb" data-element_type="widget" data-widget_type="image-box.default">
            <div class="elementor-widget-container">
              <div class="elementor-image-box-wrapper">
                <figure class="elementor-image-box-img">
                  <img loading="lazy" decoding="async" width="512" height="512" src="https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-22.png"
                  class="elementor-animation-grow attachment-full size-full wp-image-1066"
                  alt="" srcset="https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-22.png 512w, https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-22-300x300.png 300w, https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-22-100x100.png 100w, https://lucybeauty.ca/wp-content/uploads/2023/06/Artboard-22-150x150.png 150w"
                  sizes="(max-width: 512px) 100vw, 512px" />
                </figure>
                <div class="elementor-image-box-content">
                  <h3 class="elementor-image-box-title">
                    {{ $web_information->information->address ?? '' }}
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="elementor-element elementor-element-52b9351 e-flex e-con-boxed e-con"
  data-id="52b9351" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
    <div class="e-con-inner">
      <div class="elementor-element elementor-element-0b2ba99 elementor-widget elementor-widget-google_maps"
      data-id="0b2ba99" data-element_type="widget" data-widget_type="google_maps.default">
        <div class="elementor-widget-container">
          <style>
            /*! elementor - v3.15.0 - 02-08-2023 */ .elementor-widget-google_maps
            .elementor-widget-container{overflow:hidden}.elementor-widget-google_maps
            .elementor-custom-embed{line-height:0}.elementor-widget-google_maps iframe{height:300px}
          </style>
          <div class="elementor-custom-embed">
            {!! $web_information->source_code->map ?? '' !!}
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-716d850 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
  data-id="716d850" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3f8e8167"
      data-id="3f8e8167" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-5c33a59 elementor-widget elementor-widget-heading"
          data-id="5c33a59" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
              <h2 class="elementor-heading-title elementor-size-default">
                Bussiness Hours
              </h2>
            </div>
          </div>
          <div class="elementor-element elementor-element-dfa5003 elementor-widget elementor-widget-price-list"
          data-id="dfa5003" data-element_type="widget" data-widget_type="price-list.default">
            <div class="elementor-widget-container">
              <style>
                /*! elementor-pro - v3.14.0 - 26-06-2023 */ .elementor-widget-price-list
                .elementor-price-list{list-style:none;padding:0;margin:0}.elementor-widget-price-list
                .elementor-price-list li{margin:0}.elementor-price-list li:not(:last-child){margin-bottom:20px}.elementor-price-list
                .elementor-price-list-image{max-width:50%;flex-shrink:0;padding-right:25px}.elementor-price-list
                .elementor-price-list-image img{width:100%}.elementor-price-list .elementor-price-list-header,.elementor-price-list
                .elementor-price-list-item,.elementor-price-list .elementor-price-list-text{display:flex}.elementor-price-list
                .elementor-price-list-item{align-items:flex-start}.elementor-price-list
                .elementor-price-list-item .elementor-price-list-text{align-items:flex-start;flex-wrap:wrap;flex-grow:1}.elementor-price-list
                .elementor-price-list-item .elementor-price-list-header{align-items:center;flex-basis:100%;font-size:19px;font-weight:600;margin-bottom:10px;justify-content:space-between}.elementor-price-list
                .elementor-price-list-item .elementor-price-list-title{max-width:80%}.elementor-price-list
                .elementor-price-list-item .elementor-price-list-price{font-weight:600}.elementor-price-list
                .elementor-price-list-item p.elementor-price-list-description{flex-basis:100%;font-size:14px;margin:0}.elementor-price-list
                .elementor-price-list-item .elementor-price-list-separator{flex-grow:1;margin-left:10px;margin-right:10px;border-bottom-style:dotted;border-bottom-width:2px;height:0}.elementor-price-table{text-align:center}.elementor-price-table
                .elementor-price-table__header{background:var(--e-price-table-header-background-color,#555);padding:20px
                0}.elementor-price-table .elementor-price-table__heading{margin:0;padding:0;line-height:1.2;font-size:24px;font-weight:600;color:#fff}.elementor-price-table
                .elementor-price-table__subheading{font-size:13px;font-weight:400;color:#fff}.elementor-price-table
                .elementor-price-table__original-price{margin-right:15px;text-decoration:line-through;font-size:.5em;line-height:1;font-weight:400;align-self:center}.elementor-price-table
                .elementor-price-table__original-price .elementor-price-table__currency{font-size:1em;margin:0}.elementor-price-table
                .elementor-price-table__price{display:flex;justify-content:center;align-items:center;flex-wrap:wrap;flex-direction:row;color:#555;font-weight:800;font-size:65px;padding:40px
                0}.elementor-price-table .elementor-price-table__price .elementor-typo-excluded{line-height:normal;letter-spacing:normal;text-transform:none;font-weight:400;font-size:medium;font-style:normal}.elementor-price-table
                .elementor-price-table__after-price{display:flex;flex-wrap:wrap;text-align:left;align-self:stretch;align-items:flex-start;flex-direction:column}.elementor-price-table
                .elementor-price-table__integer-part{line-height:.8}.elementor-price-table
                .elementor-price-table__currency,.elementor-price-table .elementor-price-table__fractional-part{line-height:1;font-size:.3em}.elementor-price-table
                .elementor-price-table__currency{margin-right:3px}.elementor-price-table
                .elementor-price-table__period{width:100%;font-size:13px;font-weight:400}.elementor-price-table
                .elementor-price-table__features-list{list-style-type:none;margin:0;padding:0;line-height:1;color:var(--e-price-table-features-list-color)}.elementor-price-table
                .elementor-price-table__features-list li{font-size:14px;line-height:1;margin:0;padding:0}.elementor-price-table
                .elementor-price-table__features-list li .elementor-price-table__feature-inner{margin-left:15px;margin-right:15px}.elementor-price-table
                .elementor-price-table__features-list li:not(:first-child):before{content:"";display:block;border:0
                solid hsla(0,0%,47.8%,.3);margin:10px 12.5%}.elementor-price-table .elementor-price-table__features-list
                i{margin-right:10px;font-size:1.3em}.elementor-price-table .elementor-price-table__features-list
                svg{margin-right:10px;fill:var(--e-price-table-features-list-color);height:1.3em;width:1.3em}.elementor-price-table
                .elementor-price-table__features-list svg~*{vertical-align:text-top}.elementor-price-table
                .elementor-price-table__footer{padding:30px 0}.elementor-price-table .elementor-price-table__additional_info{margin:0;font-size:13px;line-height:1.4}.elementor-price-table__ribbon{position:absolute;top:0;left:auto;right:0;transform:rotate(90deg);width:150px;overflow:hidden;height:150px}.elementor-price-table__ribbon-inner{text-align:center;left:0;width:200%;transform:translateY(-50%)
                translateX(-50%) translateX(35px) rotate(-45deg);margin-top:35px;font-size:13px;line-height:2;font-weight:800;text-transform:uppercase;background:#000}.elementor-price-table__ribbon.elementor-ribbon-left{transform:rotate(0);left:0;right:auto}.elementor-price-table__ribbon.elementor-ribbon-right{transform:rotate(90deg);left:auto;right:0}.elementor-widget-price-table
                .elementor-widget-container{overflow:hidden;background-color:#f9fafa}.e-con-inner>.elementor-widget-price-list,.e-con>.elementor-widget-price-list{width:var(--container-widget-width);--flex-grow:var(--container-widget-flex-grow)}
              </style>
              <ul class="elementor-price-list">
                <li class="elementor-price-list-item">
                  <div class="elementor-price-list-text">
                    <div class="elementor-price-list-header">
                      <span class="elementor-price-list-title">
                        Monday
                      </span>
                      <span class="elementor-price-list-separator">
                      </span>
                      <span class="elementor-price-list-price">
                        10am - 7pm
                      </span>
                    </div>
                  </div>
                </li>
                <li class="elementor-price-list-item">
                  <div class="elementor-price-list-text">
                    <div class="elementor-price-list-header">
                      <span class="elementor-price-list-title">
                        Tuesday
                      </span>
                      <span class="elementor-price-list-separator">
                      </span>
                      <span class="elementor-price-list-price">
                        10am - 7pm
                      </span>
                    </div>
                  </div>
                </li>
                <li class="elementor-price-list-item">
                  <div class="elementor-price-list-text">
                    <div class="elementor-price-list-header">
                      <span class="elementor-price-list-title">
                        Wednesday
                      </span>
                      <span class="elementor-price-list-separator">
                      </span>
                      <span class="elementor-price-list-price">
                        10am - 7pm
                      </span>
                    </div>
                  </div>
                </li>
                <li class="elementor-price-list-item">
                  <div class="elementor-price-list-text">
                    <div class="elementor-price-list-header">
                      <span class="elementor-price-list-title">
                        Thursday
                      </span>
                      <span class="elementor-price-list-separator">
                      </span>
                      <span class="elementor-price-list-price">
                        10am - 7pm
                      </span>
                    </div>
                  </div>
                </li>
                <li class="elementor-price-list-item">
                  <div class="elementor-price-list-text">
                    <div class="elementor-price-list-header">
                      <span class="elementor-price-list-title">
                        Friday
                      </span>
                      <span class="elementor-price-list-separator">
                      </span>
                      <span class="elementor-price-list-price">
                        10am - 7pm
                      </span>
                    </div>
                  </div>
                </li>
                <li class="elementor-price-list-item">
                  <div class="elementor-price-list-text">
                    <div class="elementor-price-list-header">
                      <span class="elementor-price-list-title">
                        Saturday
                      </span>
                      <span class="elementor-price-list-separator">
                      </span>
                      <span class="elementor-price-list-price">
                        11am - 5pm
                      </span>
                    </div>
                  </div>
                </li>
                <li class="elementor-price-list-item">
                  <div class="elementor-price-list-text">
                    <div class="elementor-price-list-header">
                      <span class="elementor-price-list-title">
                        Sunday
                      </span>
                      <span class="elementor-price-list-separator">
                      </span>
                      <span class="elementor-price-list-price">
                        11am - 5pm
                      </span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ac2133a"
      data-id="ac2133a" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-575dd39 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-widget elementor-widget-image"
          data-id="575dd39" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
          data-widget_type="image.default">
            <div class="elementor-widget-container">
              <img loading="lazy" decoding="async" width="628" height="602" src="https://lucybeauty.ca/wp-content/uploads/2023/06/elements-line-drawing-white-jasmine-flower-illustrations-FF57E82-2020-06-29-1.png"
              class="attachment-large size-large wp-image-1067" alt="" srcset="https://lucybeauty.ca/wp-content/uploads/2023/06/elements-line-drawing-white-jasmine-flower-illustrations-FF57E82-2020-06-29-1.png 628w, https://lucybeauty.ca/wp-content/uploads/2023/06/elements-line-drawing-white-jasmine-flower-illustrations-FF57E82-2020-06-29-1-600x575.png 600w, https://lucybeauty.ca/wp-content/uploads/2023/06/elements-line-drawing-white-jasmine-flower-illustrations-FF57E82-2020-06-29-1-300x288.png 300w"
              sizes="(max-width: 628px) 100vw, 628px" />
            </div>
          </div>
          <div class="elementor-element elementor-element-3d616037 elementor-widget elementor-widget-heading"
          data-id="3d616037" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
              <h2 class="elementor-heading-title elementor-size-default">
                Get In Touch
              </h2>
            </div>
          </div>
          <div class="elementor-element elementor-element-607e0434 elementor-widget elementor-widget-text-editor"
          data-id="607e0434" data-element_type="widget" data-widget_type="text-editor.default">
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
              <p>
                We value your feedback and strive to continually improve our services
                at Lucy Beauty Studio. We would love to hear about your experience with
                us. Your opinion is important to us, so please feel free to share any comments,
                suggestions, or even specific details about what you enjoyed most during
                your visit. Your feedback will help us ensure that we provide the best
                possible beauty experience for all our valued clients.
              </p>
            </div>
          </div>
          <div class="elementor-element elementor-element-abb7b49 elementor-button-align-stretch elementor-widget elementor-widget-form"
          data-id="abb7b49" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
          data-widget_type="form.default">
            <div class="elementor-widget-container">
              <style>
                /*! elementor-pro - v3.14.0 - 26-06-2023 */ .elementor-button.elementor-hidden,.elementor-hidden{display:none}.e-form__step{width:100%}.e-form__step:not(.elementor-hidden){display:flex;flex-wrap:wrap}.e-form__buttons{flex-wrap:wrap}.e-form__buttons,.e-form__buttons__wrapper{display:flex}.e-form__indicators{display:flex;justify-content:space-between;align-items:center;flex-wrap:nowrap;font-size:13px;margin-bottom:var(--e-form-steps-indicators-spacing)}.e-form__indicators__indicator{display:flex;flex-direction:column;align-items:center;justify-content:center;flex-basis:0;padding:0
                var(--e-form-steps-divider-gap)}.e-form__indicators__indicator__progress{width:100%;position:relative;background-color:var(--e-form-steps-indicator-progress-background-color);border-radius:var(--e-form-steps-indicator-progress-border-radius);overflow:hidden}.e-form__indicators__indicator__progress__meter{width:var(--e-form-steps-indicator-progress-meter-width,0);height:var(--e-form-steps-indicator-progress-height);line-height:var(--e-form-steps-indicator-progress-height);padding-right:15px;border-radius:var(--e-form-steps-indicator-progress-border-radius);background-color:var(--e-form-steps-indicator-progress-color);color:var(--e-form-steps-indicator-progress-meter-color);text-align:right;transition:width
                .1s linear}.e-form__indicators__indicator:first-child{padding-left:0}.e-form__indicators__indicator:last-child{padding-right:0}.e-form__indicators__indicator--state-inactive{color:var(--e-form-steps-indicator-inactive-primary-color,#c2cbd2)}.e-form__indicators__indicator--state-inactive
                [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-inactive-secondary-color,#fff)}.e-form__indicators__indicator--state-inactive
                object,.e-form__indicators__indicator--state-inactive svg{fill:var(--e-form-steps-indicator-inactive-primary-color,#c2cbd2)}.e-form__indicators__indicator--state-active{color:var(--e-form-steps-indicator-active-primary-color,#39b54a);border-color:var(--e-form-steps-indicator-active-secondary-color,#fff)}.e-form__indicators__indicator--state-active
                [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-active-secondary-color,#fff)}.e-form__indicators__indicator--state-active
                object,.e-form__indicators__indicator--state-active svg{fill:var(--e-form-steps-indicator-active-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed{color:var(--e-form-steps-indicator-completed-secondary-color,#fff)}.e-form__indicators__indicator--state-completed
                [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-completed-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed
                .e-form__indicators__indicator__label{color:var(--e-form-steps-indicator-completed-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed
                .e-form__indicators__indicator--shape-none{color:var(--e-form-steps-indicator-completed-primary-color,#39b54a);background-color:initial}.e-form__indicators__indicator--state-completed
                object,.e-form__indicators__indicator--state-completed svg{fill:var(--e-form-steps-indicator-completed-secondary-color,#fff)}.e-form__indicators__indicator__icon{width:var(--e-form-steps-indicator-padding,30px);height:var(--e-form-steps-indicator-padding,30px);font-size:var(--e-form-steps-indicator-icon-size);border-width:1px;border-style:solid;display:flex;justify-content:center;align-items:center;overflow:hidden;margin-bottom:10px}.e-form__indicators__indicator__icon
                img,.e-form__indicators__indicator__icon object,.e-form__indicators__indicator__icon
                svg{width:var(--e-form-steps-indicator-icon-size);height:auto}.e-form__indicators__indicator__icon
                .e-font-icon-svg{height:1em}.e-form__indicators__indicator__number{width:var(--e-form-steps-indicator-padding,30px);height:var(--e-form-steps-indicator-padding,30px);border-width:1px;border-style:solid;display:flex;justify-content:center;align-items:center;margin-bottom:10px}.e-form__indicators__indicator--shape-circle{border-radius:50%}.e-form__indicators__indicator--shape-square{border-radius:0}.e-form__indicators__indicator--shape-rounded{border-radius:5px}.e-form__indicators__indicator--shape-none{border:0}.e-form__indicators__indicator__label{text-align:center}.e-form__indicators__indicator__separator{width:100%;height:var(--e-form-steps-divider-width);background-color:#babfc5}.e-form__indicators--type-icon,.e-form__indicators--type-icon_text,.e-form__indicators--type-number,.e-form__indicators--type-number_text{align-items:flex-start}.e-form__indicators--type-icon
                .e-form__indicators__indicator__separator,.e-form__indicators--type-icon_text
                .e-form__indicators__indicator__separator,.e-form__indicators--type-number
                .e-form__indicators__indicator__separator,.e-form__indicators--type-number_text
                .e-form__indicators__indicator__separator{margin-top:calc(var(--e-form-steps-indicator-padding,
                30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2)}.elementor-field-type-hidden{display:none}.elementor-field-type-html{display:inline-block}.elementor-login
                .elementor-lost-password,.elementor-login .elementor-remember-me{font-size:.85em}.elementor-field-type-recaptcha_v3
                .elementor-field-label{display:none}.elementor-field-type-recaptcha_v3
                .grecaptcha-badge{z-index:1}.elementor-button .elementor-form-spinner{order:3}.elementor-form
                .elementor-button>span{display:flex;justify-content:center;align-items:center}.elementor-form
                .elementor-button .elementor-button-text{white-space:normal;flex-grow:0}.elementor-form
                .elementor-button svg{height:auto}.elementor-form .elementor-button .e-font-icon-svg{height:1em}.elementor-select-wrapper
                .select-caret-down-wrapper{position:absolute;top:50%;transform:translateY(-50%);inset-inline-end:10px;pointer-events:none;font-size:11px}.elementor-select-wrapper
                .select-caret-down-wrapper svg{display:unset;width:1em;aspect-ratio:unset;fill:currentColor}.elementor-select-wrapper
                .select-caret-down-wrapper i{font-size:19px;line-height:2}.elementor-select-wrapper.remove-before:before{content:""!important}
              </style>
              <form method="post" action="{{ route('frontend.contact.store') }}">
                @csrf
                <div class="elementor-form-fields-wrapper elementor-labels-above">
                  <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-50 elementor-field-required">
                    <input type="text" name="name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Name"
                    required="required" aria-required="true">
                  </div>
                  <div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-field_bcc25bf elementor-col-50 elementor-field-required">
                    <input type="tel" name="phone" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Contact"
                    required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+"
                    title="Only numbers and phone characters (#, -, *, etc) are accepted.">
                  </div>
                  <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100">
                    <input type="email" name="email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Email">
                  </div>
                  <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
                    <textarea class="elementor-field-textual elementor-field  elementor-size-sm"
                    name="content" rows="4" placeholder="Message"></textarea>
                  </div>
                  <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                    <button type="submit" class="elementor-button elementor-size-sm">
                      <span>
                        <span class=" elementor-button-icon">
                        </span>
                        <span class="elementor-button-text">
                          {{$array_translate[strtolower('Submit')]->$locale }}
                        </span>
                      </span>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection

