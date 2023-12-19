

<?php

$title = $detail->title ?? null;
$brief = $detail->brief ?? null;
$content = $detail->content ?? null;
$image = $detail->image != '' ? $detail->image : null;

$image_thumb = $detail->image_thumb != '' ? $detail->image_thumb : null;
$date = date('H:i d/m/Y', strtotime($detail->created_at));

// For taxonomy
$taxonomy_title = $detail->taxonomy_title;
$image_background = $taxonomy_json_params->image ?? ($web_information->image->background_breadcrumbs ?? null);

$seo_title = $detail->json_params->seo_title ?? $title;
$seo_keyword = $detail->json_params->seo_keyword ?? null;
$seo_description = $detail->json_params->seo_description ?? $brief;
$seo_image = $image ?? ($image_thumb ?? null);

?>

<?php $__env->startPush('style'); ?>

  <style>
    #content-detail h2 {
      font-size: 30px;
    }

    #content-detail h3 {
      font-size: 24px;
    }

    #content-detail h4 {
      font-size: 18px;
    }

    #content-detail h5,
    #content-detail h6 {
      font-size: 16px;
    }

    #content-detail p {
      margin-top: 0;
      margin-bottom: 0;
    }

    #content-detail h1,
    #content-detail h2,
    #content-detail h3,
    #content-detail h4,
    #content-detail h5,
    #content-detail h6 {
      margin-top: 0;
      margin-bottom: .5rem;
    }

    #content-detail p+h2,
    #content-detail p+.h2 {
      margin-top: 1rem;
    }

    #content-detail h2+p,
    #content-detail .h2+p {
      margin-top: 1rem;
    }

    #content-detail p+h3,
    #content-detail p+.h3 {
      margin-top: 0.5rem;
    }

    #content-detail h3+p,
    #content-detail .h3+p {
      margin-top: 0.5rem;
    }

    #content-detail ul,
    #content-detail ol {
      list-style: inherit;
      padding: 0 0 0 50px;

    }

    #content-detail ul li,
    #content-detail ol li {
      display: list-item;
    }

    .posts-sm .entry-image {
      width: 75px;
    }
  </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
  
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
                          Home
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
    <div class="row">
      <div id="pxl-content-area" class="col-12">
        <main id="pxl-content-main">
          <article id="pxl-post-345" class="post-345 service type-service status-publish has-post-thumbnail hentry service-category-visa-processing">
            <div data-elementor-type="wp-post" data-elementor-id="345" class="elementor elementor-345">
              <section class="elementor-section elementor-top-section elementor-element elementor-element-c203942 elementor-section-stretched elementor-reverse-tablet elementor-reverse-mobile_extra elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
              data-id="c203942" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
              style="width: 1519px; left: -109.6px;">
                <div class="elementor-container elementor-column-gap-extended ">
                  
                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9cbcf9b pxl-column-none"
                  data-id="9cbcf9b" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">

                      <div class="elementor-element elementor-element-b78aae4 elementor-widget elementor-widget-pxl_heading"
                      data-id="b78aae4" data-element_type="widget" data-widget_type="pxl_heading.default">
                        <div class="elementor-widget-container">
                          <div id="pxl-pxl_heading-b78aae4-5805" class="pxl-heading px-sub-title-default-style">
                            <div class="pxl-heading--inner">
                              <h1 class="pxl-item--title " data-wow-delay="ms">
                                <?php echo e($title); ?>

                              </h1>
                            </div>
                          </div>
                        </div>
                      </div>

                      <?php echo $content; ?>

                      
                    </div>
                  </div>

                </div>
              </section>
            </div>
          </article>
          
        </main>
      </div>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp74\htdocs\duhoc\resources\views/frontend/pages/service/detail.blade.php ENDPATH**/ ?>