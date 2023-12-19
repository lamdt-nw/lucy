<section class="elementor-section elementor-top-section elementor-element elementor-element-a14b03f elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
data-id="a14b03f" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
style="width: 1519px; left: 0px; margin-top: 80px;">
  <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($banner->block_code == 'cungcap' and $banner->parent_id == ''): ?>
  <div class="elementor-element elementor-element-1ba4361 elementor-widget elementor-widget-pxl_heading"
data-id="1ba4361" data-element_type="widget" data-widget_type="pxl_heading.default">
    <div class="elementor-widget-container">
      <div id="pxl-pxl_heading-1ba4361-6010" class="pxl-heading px-sub-title-default-style">
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
            <?php echo e($banner->brief->$locale); ?>

          </h2>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <div class="elementor-container elementor-column-gap-extended ">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6def36a pxl-column-none"
    data-id="6def36a" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-389a4de elementor-widget elementor-widget-pxl_process_carousel"
        data-id="389a4de" data-element_type="widget" data-widget_type="pxl_process_carousel.default">
          <div class="elementor-widget-container">
            <div class="pxl-swiper-sliders pxl-process-carousel pxl-process-carousel1">
              <div class="pxl-carousel-inner">
                <div class="pxl-swiper-container swiper-container-initialized swiper-container-horizontal"
                dir="ltr" data-settings="{&quot;slide_direction&quot;:&quot;horizontal&quot;,&quot;slide_percolumn&quot;:&quot;1&quot;,&quot;slide_mode&quot;:&quot;slide&quot;,&quot;slides_to_show&quot;:&quot;3&quot;,&quot;slides_to_show_xxl&quot;:&quot;3&quot;,&quot;slides_to_show_lg&quot;:&quot;3&quot;,&quot;slides_to_show_md&quot;:&quot;2&quot;,&quot;slides_to_show_sm&quot;:&quot;2&quot;,&quot;slides_to_show_xs&quot;:&quot;1&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;arrow&quot;:&quot;false&quot;,&quot;pagination&quot;:&quot;false&quot;,&quot;pagination_type&quot;:&quot;bullets&quot;,&quot;autoplay&quot;:&quot;&quot;,&quot;pause_on_hover&quot;:&quot;&quot;,&quot;pause_on_interaction&quot;:&quot;true&quot;,&quot;delay&quot;:5000,&quot;loop&quot;:&quot;false&quot;,&quot;speed&quot;:500}">
                  <div class="pxl-swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                    <?php
                    $i=0;
                    foreach($blocksContent as $banner){
                    if($banner->block_code == 'cungcap' and $banner->parent_id != ''){
                      ?>
                    <div class="pxl-swiper-slide swiper-slide-visible <?php if($i==0) echo 'swiper-slide-active'; ?>" >
                      <div class="pxl-item--inner wow skewIn" data-wow-delay="ms" style="visibility: visible;">
                        <div class="pxl-item--img">
                          <img decoding="async" class="no-lazyload " src="<?php echo e($banner->image); ?>"
                          width="263" height="263" alt="<?php echo e($banner->title->$locale); ?>" title="<?php echo e($banner->title->$locale); ?>">
                          <div class="pxl-item--dot">
                          </div>
                        </div>
                        <h3 class="pxl-item--title el-empty">
                          <?php echo e($banner->title->$locale); ?>

                        </h3>
                        <div class="pxl-item--description el-empty">
                          <?php echo e($banner->brief->$locale); ?>

                        </div>
                      </div>
                    </div>
                    <?php $i++; }} ?>
                    
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
<?php /**PATH E:\xampp74\htdocs\duhoc\resources\views/frontend/element/cungcap.blade.php ENDPATH**/ ?>