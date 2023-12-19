
 <section class="elementor-section elementor-top-section elementor-element elementor-element-303f541 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
        data-id="303f541" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;tf_sticky&quot;:&quot;no&quot;}">
          <div class="elementor-background-overlay">
          </div>
          <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		  <?php if($banner->block_code == 'video'): ?>
          <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ad95247"
            data-id="ad95247" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-8b7f4a2 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                data-id="8b7f4a2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h6 class="elementor-heading-title elementor-size-default">
                     <?php echo e($banner->title); ?>

                    </h6>
                  </div>
                </div>
                <div class="elementor-element elementor-element-af51af1 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                data-id="af51af1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:80}"
                data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">
                      <?php echo e($banner->brief); ?>

                    </h2>
                  </div>
                </div>
                <div class="elementor-element elementor-element-4d5164d elementor-widget__width-auto animated-slow elementor-invisible elementor-widget elementor-widget-elementskit-video"
                data-id="4d5164d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:160}"
                data-widget_type="elementskit-video.default">
                  <div class="elementor-widget-container">
                    <div class="ekit-wid-con">
                      <div class="video-content" data-video-player="[]" data-video-setting="{&quot;videoVolume&quot;:&quot;horizontal&quot;,&quot;startVolume&quot;:0.8,&quot;videoType&quot;:&quot;iframe&quot;,&quot;videoClass&quot;:&quot;mfp-fade&quot;}">
                        <a class="ekit_icon_button ekit-video-popup ekit-video-popup-btn" href="<?php echo e($banner->url_link); ?>"
                        aria-label="video-popup">
                          <i aria-hidden="true" class="fas fa-play">
                          </i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-777f632"
            data-id="777f632" data-element_type="column">
              <?php echo $banner->content; ?>

            </div>
          </div>
          <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
<?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/element/whatelsewedo.blade.php ENDPATH**/ ?>