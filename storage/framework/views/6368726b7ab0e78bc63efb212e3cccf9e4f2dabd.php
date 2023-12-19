
	<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php if($banner->block_code == 'customer' and $banner->parent_id == ''): ?>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-8a65b6a elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
        data-id="8a65b6a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;tf_sticky&quot;:&quot;no&quot;}">
          <div class="elementor-background-overlay">
          </div>
          <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8755f40"
            data-id="8755f40" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-a06dd75 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                data-id="a06dd75" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h6 class="elementor-heading-title elementor-size-default">
                      <?php echo e($banner->title); ?>

                    </h6>
                  </div>
                </div>
                <div class="elementor-element elementor-element-8fcf175 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                data-id="8fcf175" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:80}"
                data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">
                      <?php echo e($banner->brief); ?>

                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e329ff9"
            data-id="e329ff9" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-56508e7 animated-slow elementor-invisible elementor-widget elementor-widget-text-editor"
                data-id="56508e7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                    <p>
                      <?php echo $banner->content; ?>

                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    <?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <section class="elementor-section elementor-top-section elementor-element elementor-element-cf1de11 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no" 
        data-id="cf1de11" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
          <div class="elementor-container elementor-column-gap-default autoplay1" >
            
          	<?php $i=0; ?>
          	<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    			   <?php if($banner->block_code == 'customer' and $banner->parent_id != ''): ?>
    			   <?php $i++; ?>
            <div class="elementor-column elementor-top-column elementor-element elementor-element-87e1eeb animated-slow elementor-invisible"
            data-id="87e1eeb" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-e237855 elementor-shape-circle e-grid-align-left elementor-widget__width-initial elementor-grid-0 elementor-widget elementor-widget-social-icons"
                data-id="e237855" data-element_type="widget" data-widget_type="social-icons.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-social-icons-wrapper elementor-grid">
                      <span class="elementor-grid-item">
                        <a class="elementor-icon elementor-social-icon elementor-social-icon-star elementor-repeater-item-67ce5f3"
                        target="_blank">
                          <span class="elementor-screen-only">
                            Star
                          </span>
                          <i class="fas fa-star">
                          </i>
                        </a>
                      </span>
                      <span class="elementor-grid-item">
                        <a class="elementor-icon elementor-social-icon elementor-social-icon-star elementor-repeater-item-18bb418"
                        target="_blank">
                          <span class="elementor-screen-only">
                            Star
                          </span>
                          <i class="fas fa-star">
                          </i>
                        </a>
                      </span>
                      <span class="elementor-grid-item">
                        <a class="elementor-icon elementor-social-icon elementor-social-icon-star elementor-repeater-item-ed88f62"
                        target="_blank">
                          <span class="elementor-screen-only">
                            Star
                          </span>
                          <i class="fas fa-star">
                          </i>
                        </a>
                      </span>
                      <span class="elementor-grid-item">
                        <a class="elementor-icon elementor-social-icon elementor-social-icon-star elementor-repeater-item-9cd5e07"
                        target="_blank">
                          <span class="elementor-screen-only">
                            Star
                          </span>
                          <i class="fas fa-star">
                          </i>
                        </a>
                      </span>
                      <span class="elementor-grid-item">
                        <a class="elementor-icon elementor-social-icon elementor-social-icon-star elementor-repeater-item-5cb22ca"
                        target="_blank">
                          <span class="elementor-screen-only">
                            Star
                          </span>
                          <i class="fas fa-star">
                          </i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="elementor-element elementor-element-ac70799 elementor-widget__width-initial elementor-widget elementor-widget-image"
                data-id="ac70799" data-element_type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                    <img loading="lazy" decoding="async" width="37" height="29" src="https://themesflat.co/kitmellis/wp-content/uploads/2023/02/quote-2.png"
                    class="attachment-full size-full wp-image-1589" alt="" />
                  </div>
                </div>
                <div class="elementor-element elementor-element-f77ee97 elementor-widget elementor-widget-text-editor"
                data-id="f77ee97" data-element_type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                    <p>
                      <?php echo $banner->content; ?>

                    </p>
                  </div>
                </div>
                <div class="elementor-element elementor-element-1ef4648 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="1ef4648" data-element_type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-divider">
                      <span class="elementor-divider-separator">
                      </span>
                    </div>
                  </div>
                </div>
                <div class="elementor-element elementor-element-e255d01 elementor-widget__width-auto elementor-widget elementor-widget-image"
                data-id="e255d01" data-element_type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                    <img loading="lazy" decoding="async" width="72" height="72" src="<?php echo e($banner->image); ?>"
                    class="attachment-full size-full wp-image-1961" alt="" />
                  </div>
                </div>
                <div class="elementor-element elementor-element-7ee37d0 elementor-widget__width-auto elementor-widget-tablet__width-inherit elementor-widget-mobile__width-auto elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                data-id="7ee37d0" data-element_type="widget" data-widget_type="image-box.default">
                  <div class="elementor-widget-container">
                    <?php if($i == 1){ ?>
                    <style>
                      .elementor-widget-image-box .elementor-image-box-content{width:100%}@media
                      (min-width:768px){.elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper,.elementor-widget-image-box.elementor-position-right
                      .elementor-image-box-wrapper{display:flex}.elementor-widget-image-box.elementor-position-right
                      .elementor-image-box-wrapper{text-align:right;flex-direction:row-reverse}.elementor-widget-image-box.elementor-position-left
                      .elementor-image-box-wrapper{text-align:left;flex-direction:row}.elementor-widget-image-box.elementor-position-top
                      .elementor-image-box-img{margin:auto}.elementor-widget-image-box.elementor-vertical-align-top
                      .elementor-image-box-wrapper{align-items:flex-start}.elementor-widget-image-box.elementor-vertical-align-middle
                      .elementor-image-box-wrapper{align-items:center}.elementor-widget-image-box.elementor-vertical-align-bottom
                      .elementor-image-box-wrapper{align-items:flex-end}}@media (max-width:767px){.elementor-widget-image-box
                      .elementor-image-box-img{margin-left:auto!important;margin-right:auto!important;margin-bottom:15px}}.elementor-widget-image-box
                      .elementor-image-box-img{display:inline-block}.elementor-widget-image-box
                      .elementor-image-box-title a{color:inherit}.elementor-widget-image-box
                      .elementor-image-box-wrapper{text-align:center}.elementor-widget-image-box
                      .elementor-image-box-description{margin:0}
                    </style>
                	<?php } ?>
                    <div class="elementor-image-box-wrapper">
                      <div class="elementor-image-box-content">
                        <h3 class="elementor-image-box-title">
                          <?php echo e($banner->title); ?>

                        </h3>
                        <p class="elementor-image-box-description">
                          <?php echo e($banner->brief); ?>

                        </p>
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
<?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/element/khachhang.blade.php ENDPATH**/ ?>