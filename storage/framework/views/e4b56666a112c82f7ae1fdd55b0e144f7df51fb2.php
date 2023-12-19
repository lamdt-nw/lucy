<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($banner->block_code == 'introduce'): ?>

<section class="elementor-section elementor-top-section elementor-element elementor-element-6d3940a elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
  data-id="6d3940a" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
  style="width: 1519px; left: 0px;">
    <div class="elementor-container elementor-column-gap-extended ">
      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6dce87a pxl-column-none"
      data-id="6dce87a" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-06924c0 elementor-widget elementor-widget-pxl_image"
          data-id="06924c0" data-element_type="widget" data-widget_type="pxl_image.default">
            <div class="elementor-widget-container">
              <div id="pxl_image-06924c0-8473" class="pxl-image-single  style-default wow skewIn"
              data-wow-delay="ms" style="visibility: visible;">
                <div class="pxl-item--inner " data-wow-delay="120ms">
                  <div class="pxl-item--image" data-parallax-value="">
                    <img decoding="async" width="552" height="632" src="<?php echo e($banner->image); ?>"
                    class="no-lazyload attachment-full" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fe44822 pxl-column-none"
      data-id="fe44822" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-cba0f01 elementor-widget elementor-widget-pxl_heading"
          data-id="cba0f01" data-element_type="widget" data-widget_type="pxl_heading.default">
            <div class="elementor-widget-container">
              <div id="pxl-pxl_heading-cba0f01-8140" class="pxl-heading px-sub-title-default-style">
                <div class="pxl-heading--inner">
                  <div class="pxl-item--subtitle px-sub-title-default pxl-split-text split-in-left"
                  data-wow-delay="ms" style="perspective: 400px;">
                    <div class="split-line" style="display: block; text-align: left; position: relative;">
                      <span class="pxl-item--subtext">
                        <span class="pxl-item--icon pxl-mr-1">
                          <i aria-hidden="true" class="fas fa-paper-plane">
                          </i>
                        </span>
                        <div style="position:relative;display:inline-block;">
                          <?php echo e($banner->title->$locale); ?>

                        </div>
                        
                        <span class="pxl-item--subdivider">
                        </span>
                      </span>
                    </div>
                  </div>
                  <h2 class="pxl-item--title pxl-split-text split-in-left" data-wow-delay="ms"
                  style="perspective: 400px;">
                    <div class="split-line" style="display: block; text-align: left; position: relative;">
                      <div style="position:relative;display:inline-block;">
                        <?php echo e($banner->brief->$locale); ?>

                      </div>
                      
                    </div>
                    
                  </h2>
                  <div class="px-divider--wrap ">
                    <div class="px-title--divider px-title--divider1">
                      <span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="elementor-element elementor-element-87552f6 elementor-widget elementor-widget-pxl_text_editor"
          data-id="87552f6" data-element_type="widget" data-widget_type="pxl_text_editor.default">
            <div class="elementor-widget-container">
              <div class="pxl-text-editor">
                <div class="pxl-item--inner wow skewIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms;">
                  <?php echo $banner->content->$locale; ?>

                </div>
              </div>
            </div>
          </div>
          <?php if($banner->url_link_title->$locale !=''){ ?>
          <div class="elementor-element elementor-element-529f602 elementor-widget elementor-widget-pxl_button"
          data-id="529f602" data-element_type="widget" data-widget_type="pxl_button.default">
            <div class="elementor-widget-container">
              <div id="pxl-pxl_button-529f602-2045" class="pxl-button wow skewIn" data-wow-delay="900ms"
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
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php /**PATH /home/vb2kcoqr09ph/chovay.nvoting.com/resources/views/frontend/element/gioithieu.blade.php ENDPATH**/ ?>