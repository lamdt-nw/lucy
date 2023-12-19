<?php

if($detail){

  $title_detail = $detail->title->$locale ?? $detail->title->$locale;
  $brief_detail = $detail->brief->$locale ?? null;
  $content = $detail->content->$locale ?? null;
  $image = $detail->image != '' ? $detail->image : null;
  $image_thumb = $detail->image_thumb != '' ? $detail->image_thumb : null;

  $taxonomy_title = $taxonomy->title->$locale;

  $seo_title = $detail->meta_title ?? $title_detail;
  $seo_keyword = $detail->meta_keyword ?? null;
  $seo_description = $detail->meta_description ?? $brief_detail;
  $seo_image = $image ?? ($image_thumb ?? null);
}else{
	$taxonomy_title = $taxonomy->title->$locale;
}
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
  <div class="container">
    <div class="row pxl-content-wrap pxl-has-sidebar pxl-sidebar-right">
      <div id="pxl-content-area" class="pxl-content-area pxl-content-post col-12 col-lg-12">
        <main id="pxl-content-main">
          <article id="pxl-post-22" class="pxl---post post-22 post type-post status-publish format-standard has-post-thumbnail hentry category-business category-campeign tag-education tag-finance tag-marketing">
            
            <div class="pxl-item--holder">
              <?php if($detail){ ?>
              <h2 class="pxl-item-title">
                <?php echo e($title_detail); ?>

              </h2>
              <div class="pxl-item--content clearfix">
                <div data-elementor-type="wp-post" data-elementor-id="22" class="elementor elementor-22">
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-09564fe elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
                  data-id="09564fe" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default ">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5988a00 pxl-column-none"
                      data-id="5988a00" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <?php echo $content; ?>

                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            <?php }else{ ?>
              <h2 class="pxl-item-title">
                <?php echo e($array_translate[strtolower('NotFound')]->$locale); ?>

              </h2>
            <?php } ?>
            </div>
            
          </article>
          
        </main>
      </div>
	  
    </div>
  </div>
  
  <div class="elementor-container">
      <div class="row pxl-content-wrap no-sidebar">
        <div id="pxl-content-area" class="pxl-content-area pxl-content-page col-12">
          <main id="pxl-content-main">
            <article id="pxl-post-215" class="post-215 page type-page status-publish hentry">
              <div class="pxl-entry-content clearfix">
                <div data-elementor-type="wp-page" data-elementor-id="215" class="elementor elementor-215">
					  <?php echo $__env->make('frontend.element.gioithieu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					  
					  <?php echo $__env->make('frontend.element.whatelsewedo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					  
					  <?php echo $__env->make('frontend.element.consonoibat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					  
					  <?php echo $__env->make('frontend.element.cungcap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				 </div>
              </div>
            </article>
          </main>
        </div>
      </div>
    </div>
	  
  
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vb2kcoqr09ph/chovay.nvoting.com/resources/views/frontend/pages/post/intro.blade.php ENDPATH**/ ?>