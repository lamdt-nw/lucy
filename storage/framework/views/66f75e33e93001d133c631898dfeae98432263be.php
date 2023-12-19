
<section class="elementor-section elementor-top-section elementor-element elementor-element-ddab77c elementor-section-full_width elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
    data-id="ddab77c" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-101f072"
        data-id="101f072" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-2c773dc elementor-widget elementor-widget-flex-slider"
            data-id="2c773dc" data-element_type="widget" data-widget_type="flex-slider.default">
              <div class="elementor-widget-container">
                <div class="flexslider directionnav- " data-height="726" data-height_tablet="500"
                data-height_mobile="500" data-animation_images="" data-autoplay="true"
                data-slideshowSpeed="3000" data-directionnav="" data-controlnav="true"
                data-prevtext="" data-nexttext="">
                  <ul class="slides">
                    
                  	<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($banner->block_code == 'slide'): ?>
                    <li class="item-slide">
                      <div class="bgimg " style="background-image:url(<?php echo e($banner->image_background); ?>); background-size: cover; background-position: center center;">
                      </div>
                      <img decoding="async" src="<?php echo e($banner->image); ?>"
                      alt="shape" class="bg_shape elementor-repeater-item-487d5d3_shape_one fromTop captionDelay4">
                      <div class="flex_caption container">
                        <h3 class="sub-title captionDelay6 fromTop">
                          <?php echo e($banner->brief); ?>

                        </h3>
                        <h1 class="title captionDelay8 fromTop">
                          <?php echo e($banner->title); ?>

                        </h1>
                        <ul class="button-group">
                          <li class="captionDelay9 fromTop">
                            <a href="#" class="button-one elementor-repeater-item-207536d">
                              <?php echo e($banner->url_link_title ?? 'Discover more'); ?>

                              <span class="btn-icon-right">
                              </span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>

   

<?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/element/slide.blade.php ENDPATH**/ ?>