      <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($banner->block_code == 'ourspa'): ?>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-dcd3eda elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
        data-id="dcd3eda" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;tf_sticky&quot;:&quot;no&quot;}" style="background-image: url(<?php echo e($banner->image_background); ?>);">
          <div class="elementor-background-overlay">
          </div>
          <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8c6cdf0"
            data-id="8c6cdf0" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-115dec8 animated-slow elementor-invisible elementor-widget elementor-widget-image"
                data-id="115dec8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                data-widget_type="image.default">
                  <div class="elementor-widget-container">
                    <img loading="lazy" decoding="async" width="115" height="125" src="<?php echo e($banner->image); ?>"
                    class="attachment-full size-full wp-image-410" alt="" />
                  </div>
                </div>
                <div class="elementor-element elementor-element-cda4d6a animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                data-id="cda4d6a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:80}"
                data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">
                      <?php echo e($banner->title); ?>

                    </h2>
                  </div>
                </div>
                <div class="elementor-element elementor-element-d44f881 elementor-align-center animated-slow elementor-invisible elementor-widget elementor-widget-button"
                data-id="d44f881" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:160}"
                data-widget_type="button.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-button-wrapper">
                      <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                        <span class="elementor-button-content-wrapper">
                          <span class="elementor-button-text">
                            book now
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
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/element/ourspa.blade.php ENDPATH**/ ?>