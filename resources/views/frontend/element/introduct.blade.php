<style>
  .elementor-168 .elementor-element.elementor-element-6fd27208.elementor-widget-image .elementor-widget-container img {
    -webkit-mask-image: url({{ asset('themes/frontend/lucy/wp-content/plugins/elementor/assets/mask-shapes/blob.svg')}});
  }
</style>
@foreach($blocksContent as $introduct)
  @if($introduct->block_code == 'introduct')
    <section class="elementor-section elementor-top-section elementor-element elementor-element-5b12117f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="5b12117f" data-element_type="section">
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4b70d945 animated-slow elementor-invisible"
        data-id="4b70d945" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-6fd27208 elementor-widget elementor-widget-image"
            data-id="6fd27208" data-element_type="widget" data-widget_type="image.default">
              <div class="elementor-widget-container">
                <img loading="lazy" decoding="async" width="600" height="400" src="{{ $introduct->image }}"
                class="attachment-full size-full wp-image-2398" alt="" srcset="{{ $introduct->image }}"
                sizes="(max-width: 600px) 100vw, 600px" />
              </div>
            </div>
            {{-- <div class="elementor-element elementor-element-7dbaa951 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
            data-id="7dbaa951" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
            data-widget_type="image.default">
              <div class="elementor-widget-container">
                <img loading="lazy" decoding="async" width="721" height="721" src="wp-content/uploads/2023/06/313976537_169613782348548_1411163096912899344_n-4.jpg"
                class="attachment-large size-large wp-image-378" alt="" srcset="https://lucybeauty.ca/wp-content/uploads/2023/06/313976537_169613782348548_1411163096912899344_n-4.jpg 721w, https://lucybeauty.ca/wp-content/uploads/2023/06/313976537_169613782348548_1411163096912899344_n-4-300x300.jpg 300w, https://lucybeauty.ca/wp-content/uploads/2023/06/313976537_169613782348548_1411163096912899344_n-4-100x100.jpg 100w, https://lucybeauty.ca/wp-content/uploads/2023/06/313976537_169613782348548_1411163096912899344_n-4-600x600.jpg 600w, https://lucybeauty.ca/wp-content/uploads/2023/06/313976537_169613782348548_1411163096912899344_n-4-150x150.jpg 150w"
                sizes="(max-width: 721px) 100vw, 721px" />
              </div>
            </div> 
            <div class="elementor-element elementor-element-5f7d5131 elementor-widget__width-initial elementor-absolute elementor-widget-mobile__width-initial elementor-widget elementor-widget-image"
            data-id="5f7d5131" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
            data-widget_type="image.default">
              <div class="elementor-widget-container">
                <img loading="lazy" decoding="async" width="437" height="700" src="{{ $introduct->image_background }}"
                class="attachment-large size-large wp-image-35" alt="" srcset="{{ $introduct->image_background }}"
                sizes="(max-width: 437px) 100vw, 437px" />
              </div>
            </div>--}}
          </div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-62e08015"
        data-id="62e08015" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
          <div class="elementor-widget-wrap elementor-element-populated">
            {{-- <div class="elementor-element elementor-element-217cb660 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-image"
            data-id="217cb660" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
            data-widget_type="image.default">
              <div class="elementor-widget-container">
                <img decoding="async" width="674" height="620" src="wp-content/uploads/2023/06/elements-line-drawing-white-jasmine-flower-illustrations-FF57E82-2020-06-29-2.png"
                class="attachment-large size-large wp-image-28" alt="" srcset="https://lucybeauty.ca/wp-content/uploads/2023/06/elements-line-drawing-white-jasmine-flower-illustrations-FF57E82-2020-06-29-2.png 674w, https://lucybeauty.ca/wp-content/uploads/2023/06/elements-line-drawing-white-jasmine-flower-illustrations-FF57E82-2020-06-29-2-600x552.png 600w, https://lucybeauty.ca/wp-content/uploads/2023/06/elements-line-drawing-white-jasmine-flower-illustrations-FF57E82-2020-06-29-2-300x276.png 300w"
                sizes="(max-width: 674px) 100vw, 674px" />
              </div>
            </div> --}}
            <div class="elementor-element elementor-element-5dbaba82 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
            data-id="5dbaba82" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:500}"
            data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">
                  {{ $introduct->title->$locale }}
                </h2>
              </div>
            </div>
            <div class="elementor-element elementor-element-7e496756 animated-slow elementor-invisible elementor-widget elementor-widget-text-editor"
            data-id="7e496756" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:800}"
            data-widget_type="text-editor.default">
              <div class="elementor-widget-container">
                <p>
                  {{ $introduct->brief->$locale }}
                </p>
              </div>
            </div>
            <div class="elementor-element elementor-element-3d77c5e elementor-mobile-align-center elementor-align-left elementor-widget elementor-widget-button"
            data-id="3d77c5e" data-element_type="widget" data-widget_type="button.default">
              <div class="elementor-widget-container">
                <div class="elementor-button-wrapper">
                  <a class="elementor-button elementor-button-link elementor-size-sm" href="{{ $introduct->url_link }}">
                    <span class="elementor-button-content-wrapper">
                      <span class="elementor-button-text">
                        {{ $introduct->url_link_title->$locale }}
                      </span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif
@endforeach