<?php
$page_title = $taxonomy->title ?? '';
$image_background = $taxonomy->image ?? '';

$image = $taxonomy->image ?? null;
$seo_title = $taxonomy->meta_title ?? $page_title;
$seo_keyword = $taxonomy->meta_keyword ?? null;
$seo_description = $taxonomy->meta_description ?? null;
$seo_image = $image ?? null;

?>

<?php $__env->startSection('content'); ?>
 <link rel="stylesheet" id="elementor-post-1637-css" href="<?php echo e(asset('themes/frontend/css/post-1419.css')); ?>" media="all">
  <div data-elementor-type="wp-post" data-elementor-id="1419" class="elementor elementor-1419">
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-873eaf4 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no" data-id="873eaf4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;tf_sticky&quot;:&quot;no&quot;}">
              <div class="elementor-background-overlay"></div>
              <div class="elementor-container elementor-column-gap-default">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f37647c" data-id="f37647c" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-e0663f2 elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="e0663f2" data-element_type="widget" data-widget_type="icon-list.default">
        <div class="elementor-widget-container">
      <ul class="elementor-icon-list-items">
              <li class="elementor-icon-list-item">
                      <a href="#">

                      <span class="elementor-icon-list-text">Home</span>
                      </a>
                  </li>
            </ul>
        </div>
        </div>
        <div class="elementor-element elementor-element-3469744 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="3469744" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
      <style>/*! elementor - v3.17.0 - 25-10-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default">/</h2>   </div>
        </div>
        <div class="elementor-element elementor-element-f7a23c4 elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="f7a23c4" data-element_type="widget" data-widget_type="icon-list.default">
        <div class="elementor-widget-container">
          <ul class="elementor-icon-list-items">
              <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-text"></span>
                  </li>
            </ul>
        </div>
        </div>
        <div class="elementor-element elementor-element-cd4a821 elementor-widget elementor-widget-heading" data-id="cd4a821" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
      <h2 class="elementor-heading-title elementor-size-default"><?php echo e($page_title); ?></h2>   </div>
        </div>
          </div>
    </div>
              </div>
    </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-993eb25 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no" data-id="993eb25" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;tf_sticky&quot;:&quot;no&quot;}">
            <div class="elementor-container elementor-column-gap-default"  style="display: block;">
          
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $title = $item->title;
            $brief = $item->brief;
            $image = $item->image != '' ? $item->image : '';
            $date = date('H:i d/m/Y', strtotime($item->created_at));
              
          ?>
          <div class="elementor-column  elementor-top-column elementor-element elementor-element-42fc477" data-id="42fc477" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-fbd8044 elementor-widget elementor-widget-heading" data-id="fbd8044" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
      <h4 class="elementor-heading-title elementor-size-default"><?php echo e($title); ?></h4>   </div>
        </div>
          <?php echo $item->content; ?>

          </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
              </div>
    </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-adadf16 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no" data-id="adadf16" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
            <div class="elementor-container elementor-column-gap-default">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6a5cd93" data-id="6a5cd93" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-b77554e elementor-align-center elementor-widget elementor-widget-button" data-id="b77554e" data-element_type="widget" data-widget_type="button.default">
        <div class="elementor-widget-container">
          <div class="elementor-button-wrapper">
      <a class="elementor-button elementor-button-link elementor-size-sm" href="<?php echo e($web_information->information->url_booking ?? ''); ?>">
            <span class="elementor-button-content-wrapper">
            <span class="elementor-button-text">Book now</span>
    </span>
          </a>
    </div>
        </div>
        </div>
          </div>
    </div>
              </div>
    </section>
        
        
      
              </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/pages/service/default.blade.php ENDPATH**/ ?>