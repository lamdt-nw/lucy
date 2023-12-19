<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($booking->block_code == 'booking'): ?>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-57ddef29 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="57ddef29" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f21147a"
        data-id="f21147a" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-7b34a067 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
            data-id="7b34a067" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
            data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">
                  <?php echo e($booking->title->$locale); ?>

                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d107d6e animated-slow elementor-invisible"
        data-id="d107d6e" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-63ba552f elementor-mobile-align-center elementor-widget elementor-widget-button"
            data-id="63ba552f" data-element_type="widget" data-widget_type="button.default">
              <div class="elementor-widget-container">
                <div class="elementor-button-wrapper">
                  <a class="elementor-button elementor-button-link elementor-size-sm" href="<?php echo e($booking->url_link); ?>">
                    <span class="elementor-button-content-wrapper">
                      <span class="elementor-button-text">
                        <?php echo e($booking->url_link_title->$locale); ?>

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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/frontend/element/booking.blade.php ENDPATH**/ ?>