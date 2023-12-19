<section class="elementor-section elementor-top-section elementor-element elementor-element-a70463b elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
  data-id="a70463b" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
  style="width: 1519px; left: 0px;">
    <div class="elementor-container elementor-column-gap-extended ">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-be272e6 pxl-column-none"
      data-id="be272e6" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($banner->block_code == 'visao' and $banner->parent_id == ''): ?>
          <div class="elementor-element elementor-element-f11249d elementor-widget elementor-widget-pxl_heading"
          data-id="f11249d" data-element_type="widget" data-widget_type="pxl_heading.default">
            <div class="elementor-widget-container">
              <div id="pxl-pxl_heading-f11249d-9846" class="pxl-heading px-sub-title-default-style">
                <div class="pxl-heading--inner">
                  <div class="pxl-item--subtitle px-sub-title-default pxl-split-text split-in-left"
                  data-wow-delay="ms" style="perspective: 400px;">
                    <div class="split-line" style="display: block; text-align: center; position: relative;">
                      <span class="pxl-item--subtext">
                        <span class="pxl-item--icon pxl-mr-1">
                          <i aria-hidden="true" class="fas fa-paper-plane">
                          </i>
                        </span>
                        <?php echo e($banner->title->$locale); ?>

                        
                        <span class="pxl-item--subdivider">
                        </span>
                      </span>
                    </div>
                  </div>
                  <h2 class="pxl-item--title pxl-split-text split-in-left" data-wow-delay="ms"
                  style="perspective: 400px;">
                    <div class="split-line" style="display: block; text-align: center; position: relative;">
                         <?php echo e($banner->brief->$locale); ?>

                    </div>
                    
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <div class="elementor-element elementor-element-924cd3b post-layout-visa-1 elementor-widget elementor-widget-pxl_post_carousel animated fadeInUp"
          data-id="924cd3b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
          data-widget_type="pxl_post_carousel.default">
            <div class="elementor-widget-container">
              <div class="pxl-swiper-sliders pxl-visa-carousel pxl-visa-carousel1">
                <div class="pxl-carousel-inner">
                  <div class="pxl-swiper-container swiper-container-initialized swiper-container-horizontal"
                  dir="ltr" data-settings="{&quot;slide_direction&quot;:&quot;horizontal&quot;,&quot;slide_percolumn&quot;:&quot;1&quot;,&quot;slide_mode&quot;:&quot;slide&quot;,&quot;slides_to_show&quot;:&quot;3&quot;,&quot;slides_to_show_xxl&quot;:&quot;3&quot;,&quot;slides_to_show_lg&quot;:&quot;3&quot;,&quot;slides_to_show_md&quot;:&quot;2&quot;,&quot;slides_to_show_sm&quot;:&quot;2&quot;,&quot;slides_to_show_xs&quot;:&quot;1&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;arrow&quot;:&quot;false&quot;,&quot;pagination&quot;:&quot;false&quot;,&quot;pagination_type&quot;:&quot;bullets&quot;,&quot;autoplay&quot;:&quot;&quot;,&quot;pause_on_hover&quot;:&quot;&quot;,&quot;pause_on_interaction&quot;:&quot;true&quot;,&quot;delay&quot;:5000,&quot;loop&quot;:&quot;false&quot;,&quot;speed&quot;:500}" >
                    <div class="pxl-swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                      
                      <?php $i=0; ?>
                      <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($banner->block_code == 'visao' and $banner->parent_id != ''): ?>
                      <div class="pxl-swiper-slide swiper-slide-duplicate <?php  if($i==0) echo 'swiper-slide-visible swiper-slide-active'; ?>"
                      data-swiper-slide-index="<?php echo e($i); ?>" style="width: 443.333px;">
                        <div class="pxl-item--inner " data-wow-duration="1.2s">
                          <a href="<?php echo e($banner->url_link); ?>" title="<?php echo e($banner->title->$locale); ?>">
                          </a>
                          <div class="pxl-item--featured">
                            <img decoding="async" class="no-lazyload " src="<?php echo e($banner->image_background); ?>"
                            width="420" height="511" alt="service5" title="service5">
                          </div>
                          <div class="pxl-item--holder">
                            <i class="caseicon-long-arrow-right-three icon-readmore">
                            </i>
                            <div class="pxl-item--meta">
                              <div class="pxl-item--icon">
                                <img src="<?php echo e($banner->image); ?>">
                              </div>
                              <div class="pxl-wrap-content">
                                <span class="pxl-visa-count">
                                  <?php echo e($banner->title->$locale); ?>

                                </span>
                                <h3 class="pxl-item--title">
                                  <?php echo e($banner->brief->$locale); ?>

                                </h3>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php $i++; ?>
                      <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true">
                    </span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<?php /**PATH D:\xampp7\htdocs\duhoc\resources\views/frontend/element/visao.blade.php ENDPATH**/ ?>