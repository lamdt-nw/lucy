<?php 
$taxonomy_title = $array_translate[strtolower('Testimonial')]->$locale;
$image_background = '';
?>

<?php $__env->startSection('content'); ?>

<style type="text/css">
#pxl-wapper #pxl-main {
    padding-top: 100px;
    padding-bottom: 100px;
}
</style>

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
                        <?php echo e($taxonomy_title); ?>

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
                          <?php echo e($array_translate[strtolower('Home')]->$locale); ?>

                        </a>
                      </li>
                      <li>
                        <span class="breadcrumb-entry">
                          <?php echo e($taxonomy_title); ?>

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
          <article id="pxl-post-253" class="post-253 page type-page status-publish hentry">
            <div class="pxl-entry-content clearfix">
              <div data-elementor-type="wp-page" data-elementor-id="253" class="elementor elementor-253">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-0ea5f7c elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
                data-id="0ea5f7c" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
                style="width: 1519px; left: 0px;">
                  <div class="elementor-container elementor-column-gap-extended ">
                    
                  	<?php
                    $i=0;
                    foreach($blocksContent as $banner){
                    if($banner->block_code == 'cungcap' and $banner->parent_id != ''){
                  	?>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-20fd9e2 pxl-column-none"
                    data-id="20fd9e2" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-3a29402 elementor-widget elementor-widget-pxl_image_box"
                        data-id="3a29402" data-element_type="widget" data-widget_type="pxl_image_box.default">
                          <div class="elementor-widget-container">
                            <div class="pxl-image-box pxl-image-box1 " data-wow-delay="ms">
                              <div class="pxl-banner-inner">
                                <div class="pxl-item--image" style="text-align: center;">
                                  <img decoding="async" width="740" height="452" src="<?php echo e($banner->image); ?>" style="border-radius: 50%; width: 50%;" 
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
                
              </div>
            </div>
          </article>
        </main>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vb2kcoqr09ph/chovay.nvoting.com/resources/views/frontend/pages/home/testimonial.blade.php ENDPATH**/ ?>