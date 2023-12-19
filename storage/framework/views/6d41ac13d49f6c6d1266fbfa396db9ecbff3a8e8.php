
        <section class="elementor-section elementor-top-section elementor-element elementor-element-e9cd956 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
        data-id="e9cd956" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;tf_sticky&quot;:&quot;no&quot;}">
          <div class="elementor-background-overlay">
          </div>
          <div class="elementor-container elementor-column-gap-default">
            
            <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($banner->block_code == 'outstanding'): ?>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7ac0a9a"
            data-id="7ac0a9a" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-dc30209 elementor-section-full_width animated-slow elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no elementor-invisible"
                data-id="dc30209" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;tf_sticky&quot;:&quot;no&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-12dbfd6"
                    data-id="12dbfd6" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-db96962 elementor-widget elementor-widget-image"
                        data-id="db96962" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <img loading="lazy" decoding="async" width="58" height="64" src="<?php echo e($banner->image); ?>"
                            class="attachment-full size-full wp-image-290" alt="" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c1d2621"
                    data-id="c1d2621" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-21067e7 elementor-widget__width-auto elementor-widget elementor-widget-counter"
                        data-id="21067e7" data-element_type="widget" data-widget_type="counter.default">
                          <div class="elementor-widget-container">
                            <style>
                              /*! elementor - v3.17.0 - 25-10-2023 */ .elementor-counter .elementor-counter-number-wrapper{display:flex;font-size:69px;font-weight:600;line-height:1}.elementor-counter
                              .elementor-counter-number-prefix,.elementor-counter .elementor-counter-number-suffix{flex-grow:1;white-space:pre-wrap}.elementor-counter
                              .elementor-counter-number-prefix{text-align:right}.elementor-counter .elementor-counter-number-suffix{text-align:left}.elementor-counter
                              .elementor-counter-title{text-align:center;font-size:19px;font-weight:400;line-height:2.5}
                            </style>
                            <div class="elementor-counter">
                              <div class="elementor-counter-number-wrapper">
                                <span class="elementor-counter-number-prefix">
                                </span>
                                <span class="elementor-counter-number" data-duration="2000" data-to-value="<?php echo e($banner->title); ?>"
                                data-from-value="0" data-delimiter=",">
                                  0
                                </span>
                                <span class="elementor-counter-number-suffix">
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-f28f882 elementor-widget elementor-widget-heading"
                        data-id="f28f882" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <h5 class="elementor-heading-title elementor-size-default">
                              <?php echo e($banner->brief); ?>

                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        </section>
<?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/element/consonoibat.blade.php ENDPATH**/ ?>