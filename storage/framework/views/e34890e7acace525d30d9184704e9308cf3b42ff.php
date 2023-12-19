<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($banner->block_code == 'opening'): ?>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-0b00fd0 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
        data-id="0b00fd0" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
          <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8b98cdb"
            data-id="8b98cdb" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-11df372 elementor-absolute elementor-widget elementor-widget-google_maps"
                data-id="11df372" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                data-widget_type="google_maps.default">
                  <div class="elementor-widget-container">
                    <style>
                      /*! elementor - v3.17.0 - 25-10-2023 */ .elementor-widget-google_maps
                      .elementor-widget-container{overflow:hidden}.elementor-widget-google_maps
                      .elementor-custom-embed{line-height:0}.elementor-widget-google_maps iframe{height:300px}
                    </style>
                    <div class="elementor-custom-embed">
                      <iframe loading="lazy" src="<?php echo $banner->url_link; ?>"
                      title="">
                      </iframe>
                    </div>
                  </div>
                </div>
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-96a5ea1 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
                data-id="96a5ea1" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-28c2915 animated-slow elementor-invisible"
                    data-id="28c2915" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;zoomIn&quot;,&quot;animation_delay&quot;:150}">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-5b3c3bc elementor-widget__width-initial elementor-widget elementor-widget-heading"
                        data-id="5b3c3bc" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default">
                              <?php echo e($banner->title); ?>

                            </h3>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-ddd99b5 elementor-widget__width-initial elementor-widget elementor-widget-image"
                        data-id="ddd99b5" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <img loading="lazy" decoding="async" width="54" height="54" src="<?php echo e($banner->image); ?>"
                            class="attachment-full size-full wp-image-443" alt="" />
                          </div>
                        </div>
                        <?php echo $banner->content; ?>

                      </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a18eb95 elementor-hidden-tablet elementor-hidden-mobile"
                    data-id="a18eb95" data-element_type="column">
                      <div class="elementor-widget-wrap">
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </section>
        
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH E:\xampp74\htdocs\duhoc\resources\views/frontend/element/opening.blade.php ENDPATH**/ ?>