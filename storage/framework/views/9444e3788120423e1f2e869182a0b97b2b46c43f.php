
<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($banner->block_code == 'introduce'): ?>
<section class="elementor-section elementor-top-section elementor-element elementor-element-a766f41 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
data-id="a766f41" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
  <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e134ef8 animated-slow elementor-invisible"
    data-id="e134ef8" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;zoomIn&quot;}">
      <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-62f8104 elementor-widget elementor-widget-image"
        data-id="62f8104" data-element_type="widget" data-widget_type="image.default">
          <div class="elementor-widget-container">
            <img fetchpriority="high" decoding="async" width="500" height="477" src="<?php echo e($banner->image); ?>"
            class="attachment-full size-full wp-image-2144" alt="" srcset="<?php echo e($banner->image); ?>"
            sizes="(max-width: 500px) 100vw, 500px" />
          </div>
        </div>
        <div class="elementor-element elementor-element-25c5494 elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image"
        data-id="25c5494" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
        data-widget_type="image.default">
          <div class="elementor-widget-container">
            <img decoding="async" width="193" height="158" src="<?php echo e($banner->image_background); ?>"
            class="attachment-full size-full wp-image-184" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1552e8a"
    data-id="1552e8a" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-0598e86 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
        data-id="0598e86" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
        data-widget_type="heading.default">
          <div class="elementor-widget-container">
            <style>
              /*! elementor - v3.17.0 - 25-10-2023 */ .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading
              .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading
              .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading
              .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading
              .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading
              .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading
              .elementor-heading-title.elementor-size-xxl{font-size:59px}
            </style>
            <h6 class="elementor-heading-title elementor-size-default">
              <?php echo $banner->title; ?>

            </h6>
          </div>
        </div>
        <div class="elementor-element elementor-element-6a407cf animated-slow elementor-invisible elementor-widget elementor-widget-heading"
        data-id="6a407cf" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:70}"
        data-widget_type="heading.default">
          <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">
              <?php echo $banner->brief; ?>

            </h2>
          </div>
        </div>
        <div class="elementor-element elementor-element-e4e6931 animated-slow elementor-invisible elementor-widget elementor-widget-text-editor"
        data-id="e4e6931" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:140}"
        data-widget_type="text-editor.default">
          <div class="elementor-widget-container">
            <style>
              .elementor-widget-text-editor.elementor-drop-cap-view-stacked
              .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed
              .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default)
              .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default)
              .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor
              .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor
              .elementor-drop-cap-letter{display:inline-block}
            </style>
            <p>
              <?php echo $banner->content; ?>

            </p>
          </div>
        </div>
        <div class="elementor-element elementor-element-857d794 animated-slow elementor-invisible elementor-widget elementor-widget-button"
        data-id="857d794" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:280}"
        data-widget_type="button.default">
          <div class="elementor-widget-container">
            <div class="elementor-button-wrapper">
              <a class="elementor-button elementor-button-link elementor-size-sm" href="<?php echo e($banner->url_link); ?>">
                <span class="elementor-button-content-wrapper">
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
  </div>
</section>

<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/element/gioithieu.blade.php ENDPATH**/ ?>