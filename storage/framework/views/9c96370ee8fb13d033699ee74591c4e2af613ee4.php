      <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($banner->block_code == 'follow' and $banner->parent_id == ''): ?>
      <section class="elementor-section elementor-top-section elementor-element elementor-element-7ebe925 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no elementor-invisible"
        data-id="7ebe925" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;tf_sticky&quot;:&quot;no&quot;}">
          <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6955cf3"
            data-id="6955cf3" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-28dcbc7 elementor-widget__width-auto elementor-hidden-mobile elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="28dcbc7" data-element_type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-divider">
                      <span class="elementor-divider-separator">
                      </span>
                    </div>
                  </div>
                </div>
                <div class="elementor-element elementor-element-febc9d7 elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading"
                data-id="febc9d7" data-element_type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h4 class="elementor-heading-title elementor-size-default">
                      <?php echo e($banner->title); ?>

                    </h4>
                  </div>
                </div>
                <div class="elementor-element elementor-element-f087be4 elementor-widget__width-auto elementor-hidden-mobile elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="f087be4" data-element_type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-divider">
                      <span class="elementor-divider-separator">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <section class="elementor-section elementor-top-section elementor-element elementor-element-c6a40b9 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
        data-id="c6a40b9" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
          <div class="elementor-container elementor-column-gap-default">
            <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($banner->block_code == 'follow' and $banner->parent_id != ''): ?>
            <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-0d1ea26 animated-slow elementor-invisible"
            data-id="0d1ea26" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;zoomIn&quot;}">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-c70a561 elementor-widget elementor-widget-tfimagebox"
                data-id="c70a561" data-element_type="widget" data-widget_type="tfimagebox.default">
                  <div class="elementor-widget-container">
                    <div class="tf-imagebox style-2">
                      <div class="image">
                        <img loading="lazy" decoding="async" width="400" height="394" src="<?php echo e($banner->image); ?>"
                        class="attachment-full size-full wp-image-1973" alt="" srcset="<?php echo e($banner->image); ?>"
                        sizes="(max-width: 400px) 100vw, 400px" />
                        <div class="image-overlay fade-in">
                        </div>
                      </div>
                      <div class="content-only ">
                      </div>
                      <div class="content fade-in">
                        <div class="tf-button-container ">
                          <a class="tf-button bt_icon_after hover-default" href="<?php echo e($banner->url_link); ?>">
                            <i class="fab fa-instagram">
                            </i>
                          </a>
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
<?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/element/follow.blade.php ENDPATH**/ ?>