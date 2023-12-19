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
  <link rel="stylesheet" id="elementor-post-1637-css" href="<?php echo e(asset('themes/frontend/css/post-1315.css')); ?>" media="all">
  <div data-elementor-type="wp-post" data-elementor-id="1315" class="elementor elementor-1315">
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-88b5f7b elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no" data-id="88b5f7b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;tf_sticky&quot;:&quot;no&quot;}" style="background-image: url(<?php echo e($image_background); ?>);">
              <div class="elementor-background-overlay"></div>
              <div class="elementor-container elementor-column-gap-default">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0daef24" data-id="0daef24" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-715484b elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="715484b" data-element_type="widget" data-widget_type="icon-list.default">
        <div class="elementor-widget-container">
      <link rel="stylesheet" href="https://themesflat.co/kitmellis/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">   <ul class="elementor-icon-list-items">
              <li class="elementor-icon-list-item">
                      <a href="#">

                      <span class="elementor-icon-list-text">Home</span>
                      </a>
                  </li>
            </ul>
        </div>
        </div>
        <div class="elementor-element elementor-element-d74977e elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="d74977e" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
      <style>
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default">/</h2>   </div>
        </div>
        <div class="elementor-element elementor-element-e8cab6b elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="e8cab6b" data-element_type="widget" data-widget_type="icon-list.default">
        <div class="elementor-widget-container">
          <ul class="elementor-icon-list-items">
              <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-text"></span>
                  </li>
            </ul>
        </div>
        </div>
        <div class="elementor-element elementor-element-0ba2515 elementor-widget elementor-widget-heading" data-id="0ba2515" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
      <h2 class="elementor-heading-title elementor-size-default"><?php echo e($page_title); ?></h2>    </div>
        </div>
          </div>
    </div>
              </div>
    </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-2231e57 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no" data-id="2231e57" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
            <div class="elementor-container elementor-column-gap-default">
            
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $title = $item->title;
                $brief = $item->brief;
                $image = $item->image != '' ? $item->image : '';
                $date = date('H:i d/m/Y', strtotime($item->created_at));
                // Viet ham xu ly lay alias bai viet
                
              ?>
          <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8242db3" data-id="8242db3" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
      <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-6f61f59 elementor-widget elementor-widget-image" data-id="6f61f59" data-element_type="widget" data-widget_type="image.default">
        <div class="elementor-widget-container">
                              <img decoding="async" width="196" height="196" src="<?php echo e($image); ?>" class="attachment-full size-full wp-image-1948" alt="" srcset="<?php echo e($image); ?>" sizes="(max-width: 196px) 100vw, 196px">                              </div>
        </div>
        <div class="elementor-element elementor-element-6378371 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="6378371" data-element_type="widget" data-widget_type="image.default">
        <div class="elementor-widget-container">
                              <img decoding="async" width="39" height="47" src="https://themesflat.co/kitmellis/wp-content/uploads/2023/02/icon-offer-2.png" class="attachment-full size-full wp-image-237" alt="">                             </div>
        </div>
        <div class="elementor-element elementor-element-9e72932 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="9e72932" data-element_type="widget" data-widget_type="icon-list.default">
        <div class="elementor-widget-container">
          <ul class="elementor-icon-list-items">
              <li class="elementor-icon-list-item">
                      <a href="#">
                      <span class="elementor-icon-list-text"><?php echo e($title); ?></span>
                      </a>
                  </li>
            </ul>
        </div>
        </div>
        <div class="elementor-element elementor-element-9315d6d elementor-widget elementor-widget-text-editor" data-id="9315d6d" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
      <style>
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>
      <p><?php echo e($brief); ?></p>
    </div>
        </div>
        <div class="elementor-element elementor-element-dc8779a elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="dc8779a" data-element_type="widget" data-widget_type="divider.default">
        <div class="elementor-widget-container">
          <?php if($key==0){ ?>
      <style>
.elementor-widget-divider{--divider-border-style:none;--divider-border-width:1px;--divider-color:#0c0d0e;--divider-icon-size:20px;--divider-element-spacing:10px;--divider-pattern-height:24px;--divider-pattern-size:20px;--divider-pattern-url:none;--divider-pattern-repeat:repeat-x}.elementor-widget-divider .elementor-divider{display:flex}.elementor-widget-divider .elementor-divider__text{font-size:15px;line-height:1;max-width:95%}.elementor-widget-divider .elementor-divider__element{margin:0 var(--divider-element-spacing);flex-shrink:0}.elementor-widget-divider .elementor-icon{font-size:var(--divider-icon-size)}.elementor-widget-divider .elementor-divider-separator{display:flex;margin:0;direction:ltr}.elementor-widget-divider--view-line_icon .elementor-divider-separator,.elementor-widget-divider--view-line_text .elementor-divider-separator{align-items:center}.elementor-widget-divider--view-line_icon .elementor-divider-separator:after,.elementor-widget-divider--view-line_icon .elementor-divider-separator:before,.elementor-widget-divider--view-line_text .elementor-divider-separator:after,.elementor-widget-divider--view-line_text .elementor-divider-separator:before{display:block;content:"";border-bottom:0;flex-grow:1;border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-left .elementor-divider-separator:before{content:none}.elementor-widget-divider--element-align-left .elementor-divider__element{margin-left:0}.elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-right .elementor-divider-separator:after{content:none}.elementor-widget-divider--element-align-right .elementor-divider__element{margin-right:0}.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator{border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--separator-type-pattern{--divider-border-style:none}.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator{width:100%;min-height:var(--divider-pattern-height);-webkit-mask-size:var(--divider-pattern-size) 100%;mask-size:var(--divider-pattern-size) 100%;-webkit-mask-repeat:var(--divider-pattern-repeat);mask-repeat:var(--divider-pattern-repeat);background-color:var(--divider-color);-webkit-mask-image:var(--divider-pattern-url);mask-image:var(--divider-pattern-url)}.elementor-widget-divider--no-spacing{--divider-pattern-size:auto}.elementor-widget-divider--bg-round{--divider-pattern-repeat:round}.rtl .elementor-widget-divider .elementor-divider__text{direction:rtl}.e-con-inner>.elementor-widget-divider,.e-con>.elementor-widget-divider{width:var(--container-widget-width,100%);--flex-grow:var(--container-widget-flex-grow)}</style>

  <?php } ?>
<div class="elementor-divider">
      <span class="elementor-divider-separator">
            </span>
    </div>
        </div>
        </div>
        <div class="elementor-element elementor-element-e36cf15 elementor-align-center elementor-widget elementor-widget-button" data-id="e36cf15" data-element_type="widget" data-widget_type="button.default">
        <div class="elementor-widget-container">
          <div class="elementor-button-wrapper">
      <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
            <span class="elementor-button-content-wrapper">
            <span class="elementor-button-icon elementor-align-icon-right">
        <i aria-hidden="true" class="icon icon-right-arrow"></i>      </span>
            <span class="elementor-button-text">Book now</span>
    </span>
          </a>
    </div>
        </div>
        </div>
          </div>
    </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
              </div>
    </section>
       
              </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/pages/service/category.blade.php ENDPATH**/ ?>