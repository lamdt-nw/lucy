<?php

$seo_title = $taxonomy->title->$locale ?? ($page->title ?? ($page->name ?? ''));
$seo_keyword = $taxonomy->meta_keyword ?? null;
$seo_description = $taxonomy->meta_description ?? null;
$image_background = $taxonomy->image ? 'background-image: url('.$taxonomy->image.')' : '';

?>

<?php $__env->startSection('content'); ?>


<style type="text/css">
#pxl-wapper #pxl-main {
    padding-top: 100px;
    padding-bottom: 100px;
}
</style>


  <link rel="stylesheet" id="elementor-post-60-css" href="<?php echo e(asset('themes/frontend/css/post-60.css')); ?>" media="all">
  
  <div id="pxl-page-title-elementor">
    <div data-elementor-type="wp-post" data-elementor-id="126" class="elementor elementor-126">
      <section class="elementor-section elementor-top-section elementor-element elementor-element-2b679ef elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none" style="<?php if($image_background!=''){ ?> background-image: url(<?php echo e($image_background); ?>); <?php } ?>"
      data-id="2b679ef" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default ">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-890e5c8 pxl-column-none"
          data-id="890e5c8" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-436ce90 elementor-widget elementor-widget-pxl_heading"
              data-id="436ce90" data-element_type="widget" data-widget_type="pxl_heading.default">
                <div class="elementor-widget-container">
                  <div id="pxl-pxl_heading-436ce90-2472" class="pxl-heading px-sub-title-default-style">
                    <div class="pxl-heading--inner">
                      <h1 class="pxl-item--title " data-wow-delay="ms">
                        <?php echo e($seo_title); ?>

                      </h1>
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-element elementor-element-134f3ed elementor-widget elementor-widget-pxl_breadcrumb"
              data-id="134f3ed" data-element_type="widget" data-widget_type="pxl_breadcrumb.default">
                <div class="elementor-widget-container">
                  <div class="pxl-breadcrumb-wrap">
                    <ul class="pxl-breadcrumb">
                      <li>
                        <a class="breadcrumb-entry" href="/">
                          Home
                        </a>
                      </li>
                      <li>
                        <span class="breadcrumb-entry">
                          <?php echo e($seo_title); ?>

                        </span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <div id="pxl-main">
  <div class="elementor-container">
    <div class="row pxl-content-wrap no-sidebar">
      <div id="pxl-content-area" class="pxl-content-area pxl-content-page col-12">
        <main id="pxl-content-main">
          <article id="pxl-post-60" class="post-60 page type-page status-publish hentry">
            <div class="pxl-entry-content clearfix">
              <div data-elementor-type="wp-page" data-elementor-id="60" class="elementor elementor-60">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-73602da elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
                data-id="73602da" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
                style="width: 1519px; left: 0px;">
                  <div class="elementor-container elementor-column-gap-extended ">
                    
                    <?php
                    $i=0;
                    foreach($blocksContent as $banner){
                    if($banner->block_code == 'contact'){
                    ?>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-20fd9e2 pxl-column-none"
                    data-id="20fd9e2" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-3a29402 elementor-widget elementor-widget-pxl_image_box"
                        data-id="3a29402" data-element_type="widget" data-widget_type="pxl_image_box.default">
                          <div class="elementor-widget-container">
                            <div class="pxl-image-box pxl-image-box1 " data-wow-delay="ms">
                              <div class="pxl-banner-inner">
                                <div class="pxl-item--image" >
                                  <img decoding="async" width="740" height="452" src="<?php echo e($banner->image); ?>" 
                                  class="attachment-full" alt="" srcset="<?php echo e($banner->image); ?>"
                                  sizes="(max-width: 740px) 100vw, 740px">
                                </div>
                                <div class="pxl-item--holder">
                                  
                                  <h5 class="pxl-item--title">
                                    <?php echo e($banner->title->$locale); ?>

                                  </h5>
                                  <div class="pxl-item--content">
                                    <?php echo e($banner->brief->$locale); ?>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <?php }} ?>

                  </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-c33b999 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
                data-id="c33b999" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
                style="width: 1519px; left: 0px;">
                  <div class="elementor-container elementor-column-gap-extended ">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0f738ac pxl-column-none"
                    data-id="0f738ac" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-43d9931 elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
                        data-id="43d9931" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                          <div class="elementor-container elementor-column-gap-extended ">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-af3cd5c pxl-column-none"
                            data-id="af3cd5c" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-c383065 elementor-widget elementor-widget-pxl_heading"
                                data-id="c383065" data-element_type="widget" data-widget_type="pxl_heading.default">
                                  <div class="elementor-widget-container">
                                    <div id="pxl-pxl_heading-c383065-5492" class="pxl-heading px-sub-title-under-style">
                                      <div class="pxl-heading--inner">
                                        <h3 class="pxl-item--title " data-wow-delay="ms">
                                          Drop Us A Line
                                        </h3>
                                        <div class="pxl-item--subtitle px-sub-title-under " data-wow-delay="ms">
                                          <span class="pxl-item--subtext">
                                            Jackcerra Inc will arrange your first business consultation totally free
                                            of cost
                                          </span>
                                        </div>
                                        <div class="px-divider--wrap ">
                                          <div class="px-title--divider px-title--divider1">
                                            <span>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="elementor-element elementor-element-6e3e640 elementor-widget__width-auto elementor-widget elementor-widget-pxl_contact_form"
                                data-id="6e3e640" data-element_type="widget" data-widget_type="pxl_contact_form.default">
                                  <div class="elementor-widget-container">
                                    <div class="pxl-contact-form pxl-contact-form1 btn-w-auto   " data-wow-delay="ms">
                                      <div class="wpcf7 js" id="wpcf7-f897-p60-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response">
                                          <p role="status" aria-live="polite" aria-atomic="true">
                                          </p>
                                          <ul>
                                          </ul>
                                        </div>
                                        <form action="<?php echo e(route('frontend.contact.store')); ?>" method="post" class="wpcf7-form init"
                                        aria-label="Contact form" novalidate="novalidate" data-status="init">
                                          <?php echo csrf_field(); ?>
                                          <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                              <div class="pxl--item">
                                                <p>
                                                  <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                    <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required="true" aria-invalid="false" placeholder="Name*" value=""
                                                    type="text" name="name" required>
                                                  </span>
                                                </p>
                                              </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                              <div class="pxl--item">
                                                <p>
                                                  <span class="wpcf7-form-control-wrap" data-name="your-phone">
                                                    <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required="true" aria-invalid="false" placeholder="Phone No*" value=""
                                                    type="text" name="phone" required>
                                                  </span>
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                              <div class="pxl--item">
                                                <p>
                                                  <span class="wpcf7-form-control-wrap" data-name="your-email">
                                                    <input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                    aria-required="true" aria-invalid="false" placeholder="E-mail*" value=""
                                                    type="email" name="email">
                                                  </span>
                                                </p>
                                              </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                              <div class="pxl--item">
                                                <p>
                                                  <span class="wpcf7-form-control-wrap" data-name="your-subject">
                                                    <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required="true" aria-invalid="false" placeholder="Subject*" value=""
                                                    type="text" name="subject">
                                                  </span>
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="pxl--item">
                                            <p>
                                              <span class="wpcf7-form-control-wrap" data-name="your-message">
                                                <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false" placeholder="Text*" name="your-message">
                                                </textarea>
                                              </span>
                                            </p>
                                          </div>
                                          <div class="pxl--item pxl-text-center">
                                            <p>
                                              <button type="submit" class="wpcf7-submit btn btn-skew">
                                                <span>
                                                  Contact Us
                                                </span>
                                              </button>
                                            </p>
                                          </div>
                                          <div class="wpcf7-response-output" aria-hidden="true">
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                </section>

                <section class="elementor-section elementor-top-section elementor-element elementor-element-bf9622f elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
                data-id="bf9622f" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
                style="width: 1519px; left: 0px;">
                  <div class="elementor-container elementor-column-gap-extended ">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a0cf00e pxl-column-none"
                    data-id="a0cf00e" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-9f1225b elementor-widget elementor-widget-google_maps"
                        data-id="9f1225b" data-element_type="widget" data-widget_type="google_maps.default">
                          <div class="elementor-widget-container">
                            <style>
                              /*! elementor - v3.17.0 - 25-10-2023 */ .elementor-widget-google_maps
                              .elementor-widget-container{overflow:hidden}.elementor-widget-google_maps
                              .elementor-custom-embed{line-height:0}.elementor-widget-google_maps iframe{height:400px}
                            </style>
                            <div class="elementor-custom-embed">
                              <?php echo $web_information->source_code->map; ?>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

              </div>
            </div>
          </article>
        </main>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp74\htdocs\duhoc\resources\views/frontend/pages/contact/index.blade.php ENDPATH**/ ?>