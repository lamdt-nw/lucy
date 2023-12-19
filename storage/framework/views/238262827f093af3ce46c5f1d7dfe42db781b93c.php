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

  
  <div id="pxl-page-title-elementor">
    <div data-elementor-type="wp-post" data-elementor-id="126" class="elementor elementor-126">
      <section class="elementor-section elementor-top-section elementor-element elementor-element-2b679ef elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none" style="<?php if($image!=''){ ?> background-image: url(<?php echo e($image); ?>); <?php } ?>"
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
                        <?php echo e($page_title); ?>

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
                          <?php echo e($page_title); ?>

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
                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                    $title = $item->title;
                    $brief = $item->brief;
                    $image = $item->image != '' ? $item->image : '';
                    $date = date('H:i d/m/Y', strtotime($item->created_at));
                      
                  ?>
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

                      <?php echo $item->content; ?>

                      
                    </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
              </section>
            </div>
          </article>
          <!-- #post -->
        </main>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp74\htdocs\duhoc\resources\views/frontend/pages/service/default.blade.php ENDPATH**/ ?>