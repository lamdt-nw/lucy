
	<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php if($banner->block_code == 'cungcap' and $banner->parent_id == ''): ?>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-45c7be9 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
        data-id="45c7be9" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
          <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-71a511a"
            data-id="71a511a" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-a6dd452 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                data-id="a6dd452" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h6 class="elementor-heading-title elementor-size-default">
                      <?php echo e($banner->title); ?>

                    </h6>
                  </div>
                </div>
                <div class="elementor-element elementor-element-e00bc26 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                data-id="e00bc26" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:50}"
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


	<section class="elementor-section elementor-top-section elementor-element elementor-element-77cfde8 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
        data-id="77cfde8" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
          <div class="elementor-container elementor-column-gap-default">
            <?php $i=0; ?>
          	<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($banner->block_code == 'cungcap' and $banner->parent_id != ''): ?>
			<?php $i++; ?>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f461b4a animated-slow elementor-invisible"
            data-id="f461b4a" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-f3a710e elementor-widget__width-auto elementor-widget elementor-widget-image"
                data-id="f3a710e" data-element_type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                    <img loading="lazy" decoding="async" width="188" height="188" src="<?php echo e($banner->image); ?>"
                    class="attachment-full size-full wp-image-1952" alt="" srcset="<?php echo e($banner->image); ?>"
                    sizes="(max-width: 188px) 100vw, 188px" />
                  </div>
                </div>
                <div class="elementor-element elementor-element-35fff66 elementor-widget elementor-widget-heading"
                data-id="35fff66" data-element_type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h4 class="elementor-heading-title elementor-size-default">
                      <?php echo e($banner->title); ?>

                    </h4>
                  </div>
                </div>
                <div class="elementor-element elementor-element-b737b8e elementor-widget elementor-widget-text-editor"
                data-id="b737b8e" data-element_type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                    <p>
                      <?php echo e($banner->brief); ?>

                    </p>
                  </div>
                </div>
                <div class="elementor-element elementor-element-281287e elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="281287e" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-divider">
                      <span class="elementor-divider-separator">
                      </span>
                    </div>
                  </div>
                </div>
                <div class="elementor-element elementor-element-5b1127b elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-heading"
                data-id="5b1127b" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">
                      <?php echo e($i < 10 ? '0'.$i : $i); ?>

                    </h5>
                  </div>
                </div>
              </div>
            </div>
			<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


          </div>
        </section>

<?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/element/cungcap.blade.php ENDPATH**/ ?>