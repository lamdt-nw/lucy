<style>
  .elementor-168 .elementor-element.elementor-element-6fd27208.elementor-widget-image .elementor-widget-container img {
    -webkit-mask-image: url(<?php echo e(asset('themes/frontend/lucy/wp-content/plugins/elementor/assets/mask-shapes/blob.svg')); ?>);
  }
</style>
<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $introduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($introduct->block_code == 'introduct'): ?>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-5b12117f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="5b12117f" data-element_type="section">
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4b70d945 animated-slow elementor-invisible"
        data-id="4b70d945" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-6fd27208 elementor-widget elementor-widget-image"
            data-id="6fd27208" data-element_type="widget" data-widget_type="image.default">
              <div class="elementor-widget-container">
                <img loading="lazy" decoding="async" width="600" height="400" src="<?php echo e($introduct->image); ?>"
                class="attachment-full size-full wp-image-2398" alt="" srcset="<?php echo e($introduct->image); ?>"
                sizes="(max-width: 600px) 100vw, 600px" />
              </div>
            </div>
            
          </div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-62e08015"
        data-id="62e08015" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
          <div class="elementor-widget-wrap elementor-element-populated">
            
            <div class="elementor-element elementor-element-5dbaba82 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
            data-id="5dbaba82" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:500}"
            data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">
                  <?php echo e($introduct->title->$locale); ?>

                </h2>
              </div>
            </div>
            <div class="elementor-element elementor-element-7e496756 animated-slow elementor-invisible elementor-widget elementor-widget-text-editor"
            data-id="7e496756" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:800}"
            data-widget_type="text-editor.default">
              <div class="elementor-widget-container">
                <p>
                  <?php echo e($introduct->brief->$locale); ?>

                </p>
              </div>
            </div>
            <div class="elementor-element elementor-element-3d77c5e elementor-mobile-align-center elementor-align-left elementor-widget elementor-widget-button"
            data-id="3d77c5e" data-element_type="widget" data-widget_type="button.default">
              <div class="elementor-widget-container">
                <div class="elementor-button-wrapper">
                  <a class="elementor-button elementor-button-link elementor-size-sm" href="<?php echo e($introduct->url_link); ?>">
                    <span class="elementor-button-content-wrapper">
                      <span class="elementor-button-text">
                        <?php echo e($introduct->url_link_title->$locale); ?>

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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/frontend/element/introduct.blade.php ENDPATH**/ ?>