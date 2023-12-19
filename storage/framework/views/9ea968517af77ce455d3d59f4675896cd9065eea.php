<section class="elementor-section elementor-top-section elementor-element elementor-element-aa56080 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
  data-id="aa56080" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
  style="width: 1519px; left: 0px;">
    <div class="elementor-background-overlay">
    </div>
    <div class="elementor-container elementor-column-gap-extended ">
      <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($banner->block_code == 'outstanding'): ?>
      <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-d325b8a pxl-column-none"
      data-id="d325b8a" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-fdb0f10 elementor-widget elementor-widget-pxl_counter"
          data-id="fdb0f10" data-element_type="widget" data-widget_type="pxl_counter.default">
            <div class="elementor-widget-container">
              <div class="pxl-counter pxl-counter3 " data-wow-delay="ms">
                <div class="pxl--item-inner">
                  <div class="pxl--counter-meta">
                    <div class="pxl--counter-number">
                      <span class="pxl--counter-prefix el-empty">
                      </span>
                      <span class="pxl--counter-value effect-default" data-duration="2000" data-startnumber="1"
                      data-endnumber="<?php echo e($banner->title->$locale); ?>" data-to-value="<?php echo e($banner->title->$locale); ?>" data-delimiter="">
                        <?php echo e($banner->title->$locale); ?>

                      </span>
                      <span class="pxl--counter-suffix">
                        <?php echo e($banner->brief->$locale); ?>

                      </span>
                    </div>
                    <div class="pxl--item-title">
                      <?php echo $banner->content->$locale; ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
  </section>
<?php /**PATH D:\xampp7\htdocs\lucy\resources\views/frontend/element/consonoibat.blade.php ENDPATH**/ ?>