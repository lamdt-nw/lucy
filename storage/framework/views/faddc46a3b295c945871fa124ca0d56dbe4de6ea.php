
<section class="elementor-section elementor-top-section elementor-element elementor-element-b32ea96 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-full-content-with-space-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
data-id="b32ea96" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
style="width: 1519px; left: 0px;">
  
  <div class="elementor-container elementor-column-gap-extended ">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-392b12e pxl-column-none"
    data-id="392b12e" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-6e8247c elementor-widget elementor-widget-pxl_slider"
        data-id="6e8247c" data-element_type="widget" data-widget_type="pxl_slider.default">
          <div class="elementor-widget-container">
            <div class="pxl-swiper-sliders pxl-element-slider pxl-swiper-sliders1 pxl-swiper-nogap   pxl-swiper-show-pagination"
            data-slider-mode="fade" style="opacity: 1; transition-delay: 300ms;">
              <div class="pxl-carousel-inner">
                <div class="pxl-swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal"
                dir="ltr" data-settings="{&quot;slide_direction&quot;:&quot;horizontal&quot;,&quot;slide_percolumn&quot;:&quot;1&quot;,&quot;slide_mode&quot;:&quot;fade&quot;,&quot;slides_to_show&quot;:&quot;1&quot;,&quot;slides_to_show_xxl&quot;:&quot;1&quot;,&quot;slides_to_show_lg&quot;:&quot;1&quot;,&quot;slides_to_show_md&quot;:&quot;1&quot;,&quot;slides_to_show_sm&quot;:&quot;1&quot;,&quot;slides_to_show_xs&quot;:&quot;1&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;arrow&quot;:&quot;false&quot;,&quot;pagination&quot;:&quot;true&quot;,&quot;pagination_type&quot;:&quot;bullets&quot;,&quot;autoplay&quot;:&quot;true&quot;,&quot;pause_on_hover&quot;:&quot;&quot;,&quot;pause_on_interaction&quot;:&quot;true&quot;,&quot;delay&quot;:5000,&quot;loop&quot;:&quot;false&quot;,&quot;speed&quot;:500}">
                  <div class="pxl-swiper-wrapper" style="transition-duration: 0ms;">
                    <?php $array_title_slide = array()?>
                    <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($banner->block_code == 'slide'): ?>
                    <?php $array_title_slide[$banner->id] = $banner->title->$locale?>
                    <div class="pxl-swiper-slide swiper-slide-visible swiper-slide-active"
                    id="pxl_slider-<?php echo e($banner->id); ?>" style="width: 1519px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                      <div class="pxl-slider--inner elementor-repeater-item-c328bec">
                        <div class="pxl-slider--mainimage pxl-image--kenburns wow animated" style="visibility: visible;">
                          <div class="pxl-slider--image bg-image" style="background-image: url(<?php echo e($banner->image_background); ?>);">
                          </div>
                        </div>
                        <div class="pxl-slider--content content-align-flex-end">
                          <div data-elementor-type="wp-post" data-elementor-id="2907" class="elementor elementor-2907">
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-1c29997 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-full-content-with-space-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
                            data-id="1c29997" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
                            style="width: 1519px; left: -79.5px;">
                              <div class="elementor-container elementor-column-gap-extended ">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a938546 pxl-column-none"
                                data-id="a938546" data-element_type="column">
                                  <div class="elementor-widget-wrap elementor-element-populated">
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-6ef7d49 elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
                                    data-id="6ef7d49" data-element_type="section">
                                      <div class="elementor-container elementor-column-gap-extended ">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-009d83c pxl-column-none"
                                        data-id="009d83c" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-bb1a481 elementor-widget elementor-widget-pxl_heading"
                                            data-id="bb1a481" data-element_type="widget" data-widget_type="pxl_heading.default">
                                              <div class="elementor-widget-container">
                                                <div id="pxl-pxl_heading-bb1a481-7231" class="pxl-heading px-sub-title-box2-style">
                                                  <div class="pxl-heading--inner  wow skewIn animated">
                                                    <?php echo $banner->content->$locale; ?>

                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="elementor-element elementor-element-57c6d08 elementor-widget elementor-widget-pxl_text_editor animated fadeInUp"
                                            data-id="57c6d08" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}"
                                            data-widget_type="pxl_text_editor.default">
                                              <div class="elementor-widget-container">
                                                <div class="pxl-text-editor">
                                                  <div class="pxl-item--inner wow skewIn" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms;">
                                                    <p>
                                                      <?php echo e($banner->brief->$locale); ?>

                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2974158 elementor-widget elementor-widget-pxl_button animated fadeInUp"
                                            data-id="2974158" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                            data-widget_type="pxl_button.default">
                                              <div class="elementor-widget-container">
                                                <div id="pxl-pxl_button-2974158-2529" class="pxl-button wow skewIn" data-wow-delay="900ms"
                                                style="visibility: visible; animation-delay: 900ms;">
                                                  <a href="<?php echo e($banner->url_link); ?>" class="btn pxl-icon-active btn-default wow skewIn pxl-icon--left"
                                                  data-wow-delay="900ms" style="visibility: visible; animation-delay: 900ms;">
                                                    <span class="pxl--btn-text " data-text="<?php echo e($banner->url_link_title->$locale); ?>">
                                                      <?php echo e($banner->url_link_title->$locale); ?>

                                                    </span>
                                                    <span class="pxl--text-wrap">
                                                      <span class="pxl--btn-text1 ">
                                                        <?php echo e($banner->url_link_title->$locale); ?>

                                                      </span>
                                                      <span class="pxl--btn-text2 ">
                                                        <?php echo e($banner->url_link_title->$locale); ?>

                                                      </span>
                                                    </span>
                                                  </a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a5c577e pxl-column-none"
                                        data-id="a5c577e" data-element_type="column">
                                          <div class="elementor-widget-wrap">
                                          </div>
                                        </div>
                                      </div>
                                    </section>
                                    <?php if($banner->image !=''){ ?>
                                    <div class="elementor-element elementor-element-e83d0f3 elementor-absolute elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile elementor-widget elementor-widget-pxl_image"
                                    data-id="e83d0f3" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                    data-widget_type="pxl_image.default">
                                      <div class="elementor-widget-container">
                                        <div id="pxl_image-e83d0f3-6988" class="pxl-image-single style-default wow RotatingY"
                                        data-wow-delay="ms" style="visibility: visible;">
                                          <div class="pxl-item--inner " data-wow-delay="120ms">
                                            <div class="pxl-item--image" data-parallax-value="">
                                              <img decoding="async" width="1388" height="729" src="<?php echo e($banner->image); ?>"
                                              class="no-lazyload attachment-full" alt="">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <div class="elementor-element elementor-element-ded00b5 elementor-absolute elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile elementor-hidden-tablet_extra elementor-widget elementor-widget-pxl_image"
                                    data-id="ded00b5" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                    data-widget_type="pxl_image.default">
                                      <div class="elementor-widget-container">
                                        <div id="pxl_image-ded00b5-2641" class="pxl-image-single style-default wow skewIn"
                                        data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms;">
                                          <div class="pxl-item--inner " data-wow-delay="120ms">
                                            <div class="pxl-item--image" data-parallax-value="">
                                              <img decoding="async" class="no-lazyload " src="<?php echo e($banner->image); ?>"
                                              width="1040" height="761" alt="studen" title="studen">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>
                            </section>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </div>
                  <span class="swiper-notification" aria-live="assertive" aria-atomic="true">
                  </span>
                </div>
              </div>
              <div class="pxl-item--titles">
                <?php $i=0; foreach($array_title_slide as $key=> $title_slide){ ?>
                <span class="pxl-item-title pxl-cursor--cta <?php if($i == 0){ echo 'active';} ?>" data-target="#pxl_slider-<?php echo e($key); ?>"
                tabindex="<?php echo e($key); ?>" role="button" aria-label="<?php echo e($i+1); ?>">
                  <span class="pxl-title--text">
                    <?php echo e($title_slide); ?>

                  </span>
                </span>
                <?php $i++; } ?>
              </div>
              <div class="pxl-swiper-pagination style-vertical ">
                <div class="pxl-swiper-dots style-6 position-left pxl-style-vertical swiper-pagination-clickable pxl-swiper-pagination-bullets">
                  
                  <?php $i=0; foreach($array_title_slide as $key=> $title_slide){ ?>
                  <span class="pxl-swiper-pagination-bullet <?php if($i ==0) echo 'swiper-pagination-bullet-active' ?>"
                  tabindex="<?php echo e($i); ?>" role="button" aria-label="<?php echo e($i+1); ?>">
                  </span>
                  <?php $i++; } ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<?php /**PATH /home/vb2kcoqr09ph/chovay.nvoting.com/resources/views/frontend/element/slide.blade.php ENDPATH**/ ?>