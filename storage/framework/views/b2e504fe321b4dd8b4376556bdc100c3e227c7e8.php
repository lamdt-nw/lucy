<?php $image = $background = ''; ?>
<section class="elementor-section elementor-top-section elementor-element elementor-element-19424b4 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-full-content-with-space-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
  data-id="19424b4" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
  style="width: 1519px; left: 0px;">
    <div class="elementor-container elementor-column-gap-extended ">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cf03c62 pxl-column-none"
      data-id="cf03c62" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <section class="elementor-section elementor-inner-section elementor-element elementor-element-fab74e5 elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
          data-id="fab74e5" data-element_type="section">
            <div class="elementor-container elementor-column-gap-extended ">
              <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-53e140c pxl-column-none"
              data-id="53e140c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <?php
                    $image = $background = '';
                  ?>
                  <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($banner->block_code == 'customer' and $banner->parent_id == '' ): ?>
                  <?php $image = $banner->image; $background = $banner->image_background; ?>
                  <div class="elementor-element elementor-element-dcaf82e elementor-widget elementor-widget-pxl_heading"
                  data-id="dcaf82e" data-element_type="widget" data-widget_type="pxl_heading.default">
                    <div class="elementor-widget-container">
                      <div id="pxl-pxl_heading-dcaf82e-4732" class="pxl-heading px-sub-title-default-style">
                        <div class="pxl-heading--inner">
                          <div class="pxl-item--subtitle px-sub-title-default pxl-split-text split-in-left"
                          data-wow-delay="ms" style="perspective: 400px;">
                            <div class="split-line" style="display: block; text-align: left; position: relative;">
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
                            <div class="split-line" style="display: block; text-align: left; position: relative;">
                              <?php echo e($banner->brief->$locale); ?>

                            </div>
                          </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($banner->block_code == 'customer' and $banner->parent_id != '' ): ?>
                  <div class="elementor-element elementor-element-d78c52b  elementor-widget elementor-widget-pxl_icon_box"
                  data-id="d78c52b " data-element_type="widget" data-widget_type="pxl_icon_box.default">
                    <div class="elementor-widget-container">
                      <div class="pxl-icon-box pxl-icon-box3 wow PXLfadeInUp" data-wow-delay="ms"
                      style="visibility: visible;">
                        <div class="pxl-item--inner  ">
                          <div class="pxl-item--icon" style="background-image: url(<?php echo e($banner->image); ?>);">
                            <img style="width: 73px; height:73px;border-radius: 50%" src="<?php echo e($banner->image); ?>">
                          </div>
                          <div class="pxl-item--holder">
                            <h5 class="pxl-item--title el-empty">
                              <?php echo e($banner->title->$locale); ?>

                            </h5>
                            <span class="pxl-item--description el-empty">
                              <?php echo e($banner->brief->$locale); ?>

                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>

              <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-88d7e9a pxl-column-none"
              data-id="88d7e9a" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-dc3ea9f elementor-widget elementor-widget-pxl_image"
                  data-id="dc3ea9f" data-element_type="widget" data-widget_type="pxl_image.default">
                    <div class="elementor-widget-container">
                      <div id="pxl_image-dc3ea9f-2129" class="pxl-image-single  style-default wow skewIn"
                      data-wow-delay="ms" style="visibility: visible;">
                        <div class="pxl-item--inner " data-wow-delay="120ms">
                          <div class="pxl-item--image" data-parallax-value="">
                            <img decoding="async" width="638" height="763" src="<?php echo e($image); ?>"
                            class="no-lazyload attachment-full" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="elementor-element elementor-element-8c3a43b elementor-absolute elementor-widget elementor-widget-pxl_image"
          data-id="8c3a43b" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
          data-widget_type="pxl_image.default">
            <div class="elementor-widget-container">
              <div id="pxl_image-8c3a43b-2364" class="pxl-image-single  style-default "
              data-wow-delay="ms">
                <div class="pxl-item--inner " data-wow-delay="120ms">
                  <div class="pxl-item--image" data-parallax-value="">
                    <img decoding="async" width="1265" height="700" src="<?php echo e($background); ?>"
                    class="no-lazyload attachment-full" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</section>
<?php /**PATH E:\xampp74\htdocs\duhoc\resources\views/frontend/element/whatelsewedo.blade.php ENDPATH**/ ?>