
	<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php if($banner->block_code == 'visao' and $banner->parent_id == ''): ?>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-6c59a19 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
        data-id="6c59a19" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
          <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-df1d012"
            data-id="df1d012" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-6b3f9db animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                data-id="6b3f9db" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h6 class="elementor-heading-title elementor-size-default">
                      <?php echo e($banner->title); ?>

                    </h6>
                  </div>
                </div>
                <div class="elementor-element elementor-element-3e630d1 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                data-id="3e630d1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:80}"
                data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">
                       <?php echo e($banner->brief); ?>

                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    <?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <section class="elementor-section elementor-top-section elementor-element elementor-element-cb1ed89 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
        data-id="cb1ed89" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
          <div class="elementor-container elementor-column-gap-default">
            
          	<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($banner->block_code == 'visao' and $banner->parent_id != ''): ?>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8f9571f animated-slow elementor-invisible"
            data-id="8f9571f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-44cb620 elementor-widget elementor-widget-image"
                data-id="44cb620" data-element_type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                    <img loading="lazy" decoding="async" width="196" height="196" src="<?php echo e($banner->image); ?>"
                    class="attachment-full size-full wp-image-1949" alt="" srcset="<?php echo e($banner->image); ?>"
                    sizes="(max-width: 196px) 100vw, 196px" />
                  </div>
                </div>
                <div class="elementor-element elementor-element-3baf07e elementor-widget__width-initial elementor-widget elementor-widget-image"
                data-id="3baf07e" data-element_type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                    <img loading="lazy" decoding="async" width="39" height="47" src="<?php echo e($banner->image_background); ?>"
                    class="attachment-full size-full wp-image-237" alt="" />
                  </div>
                </div>
                <div class="elementor-element elementor-element-c9e4f56 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                data-id="c9e4f56" data-element_type="widget" data-widget_type="icon-list.default">
                  <div class="elementor-widget-container">
                    
                    <ul class="elementor-icon-list-items">
                      <li class="elementor-icon-list-item">
                        <a href="#">
                          <span class="elementor-icon-list-text">
                            <?php echo e($banner->title); ?>

                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="elementor-element elementor-element-4adeed7 elementor-widget elementor-widget-text-editor"
                data-id="4adeed7" data-element_type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                    <p>
                      <?php echo e($banner->brief); ?>

                    </p>
                  </div>
                </div>
                <div class="elementor-element elementor-element-0684290 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="0684290" data-element_type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                    <style>
                      /*! elementor - v3.17.0 - 25-10-2023 */ .elementor-widget-divider{--divider-border-style:none;--divider-border-width:1px;--divider-color:#0c0d0e;--divider-icon-size:20px;--divider-element-spacing:10px;--divider-pattern-height:24px;--divider-pattern-size:20px;--divider-pattern-url:none;--divider-pattern-repeat:repeat-x}.elementor-widget-divider
                      .elementor-divider{display:flex}.elementor-widget-divider .elementor-divider__text{font-size:15px;line-height:1;max-width:95%}.elementor-widget-divider
                      .elementor-divider__element{margin:0 var(--divider-element-spacing);flex-shrink:0}.elementor-widget-divider
                      .elementor-icon{font-size:var(--divider-icon-size)}.elementor-widget-divider
                      .elementor-divider-separator{display:flex;margin:0;direction:ltr}.elementor-widget-divider--view-line_icon
                      .elementor-divider-separator,.elementor-widget-divider--view-line_text
                      .elementor-divider-separator{align-items:center}.elementor-widget-divider--view-line_icon
                      .elementor-divider-separator:after,.elementor-widget-divider--view-line_icon
                      .elementor-divider-separator:before,.elementor-widget-divider--view-line_text
                      .elementor-divider-separator:after,.elementor-widget-divider--view-line_text
                      .elementor-divider-separator:before{display:block;content:"";border-bottom:0;flex-grow:1;border-top:var(--divider-border-width)
                      var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--element-align-left
                      .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-left
                      .elementor-divider-separator:before{content:none}.elementor-widget-divider--element-align-left
                      .elementor-divider__element{margin-left:0}.elementor-widget-divider--element-align-right
                      .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-right
                      .elementor-divider-separator:after{content:none}.elementor-widget-divider--element-align-right
                      .elementor-divider__element{margin-right:0}.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon)
                      .elementor-divider-separator{border-top:var(--divider-border-width) var(--divider-border-style)
                      var(--divider-color)}.elementor-widget-divider--separator-type-pattern{--divider-border-style:none}.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line
                      .elementor-divider-separator,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line)
                      .elementor-divider-separator:after,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line)
                      .elementor-divider-separator:before,.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view])
                      .elementor-divider-separator{width:100%;min-height:var(--divider-pattern-height);-webkit-mask-size:var(--divider-pattern-size)
                      100%;mask-size:var(--divider-pattern-size) 100%;-webkit-mask-repeat:var(--divider-pattern-repeat);mask-repeat:var(--divider-pattern-repeat);background-color:var(--divider-color);-webkit-mask-image:var(--divider-pattern-url);mask-image:var(--divider-pattern-url)}.elementor-widget-divider--no-spacing{--divider-pattern-size:auto}.elementor-widget-divider--bg-round{--divider-pattern-repeat:round}.rtl
                      .elementor-widget-divider .elementor-divider__text{direction:rtl}.e-con-inner>.elementor-widget-divider,.e-con>.elementor-widget-divider{width:var(--container-widget-width,100%);--flex-grow:var(--container-widget-flex-grow)}
                    </style>
                    <div class="elementor-divider">
                      <span class="elementor-divider-separator">
                      </span>
                    </div>
                  </div>
                </div>
                <div class="elementor-element elementor-element-1e3364a elementor-align-center elementor-widget elementor-widget-button"
                data-id="1e3364a" data-element_type="widget" data-widget_type="button.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-button-wrapper">
                      <a class="elementor-button elementor-button-link elementor-size-sm" href=" <?php echo e($banner->url_link); ?>">
                        <span class="elementor-button-content-wrapper">
                          <span class="elementor-button-icon elementor-align-icon-right">
                            <i aria-hidden="true" class="icon icon-right-arrow">
                            </i>
                          </span>
                          <span class="elementor-button-text">
                            <?php echo e($banner->url_link_title); ?>

                          </span>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </section>
<?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/element/visao.blade.php ENDPATH**/ ?>