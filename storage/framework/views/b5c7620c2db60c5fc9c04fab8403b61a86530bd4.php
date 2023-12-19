

<?php

$page_title = $taxonomy->title->$locale ?? '';
$image_background = $taxonomy->json_params->image_background ? 'background-image: url('.$taxonomy->json_params->image_background.')' : '';

$image = $taxonomy->json_params->image_background ?? null;
$seo_title = $taxonomy->title->$locale ?? $page_title;
$seo_keyword = $taxonomy->meta_keyword ?? null;
$seo_description = $taxonomy->content->$locale ?? null;
$seo_image = $image ?? null;

?>

<?php $__env->startSection('content'); ?>

<link rel='stylesheet' href=<?php echo e(asset('themes/frontend/lucy/wp-content/uploads/elementor/css/post-726.css?ver=1702740145')); ?> media='all' />
<link rel='stylesheet' href=<?php echo e(asset('themes/frontend/lucy/new_js/pxl-style.min.css?ver=1.0.0')); ?> media='all' />
<link rel='stylesheet' href=<?php echo e(asset('themes/frontend/lucy/new_js/pxl-grid.min.css?ver=1.0.0')); ?>  media='all' />
<style>
  .elementor-726 .elementor-element.elementor-element-392deb9f:not(.elementor-motion-effects-element-type-background){
      background-image: url(<?php echo e($taxonomy->json_params->image_background); ?>);
  }
</style>
<div data-elementor-type="wp-page" data-elementor-id="726" class="elementor elementor-726 elementor-168"
data-elementor-post-type="page">
  <section class="elementor-section elementor-top-section elementor-element elementor-element-392deb9f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
  data-id="392deb9f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-background-overlay">
    </div>
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4996e443"
      data-id="4996e443" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-5b8b1e76 elementor-widget elementor-widget-heading"
          data-id="5b8b1e76" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
              <h1 class="elementor-heading-title elementor-size-default">
                <?php echo e($taxonomy->title->$locale); ?>

              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-6f6d39a elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
data-id="6f6d39a" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
  <div class="elementor-container elementor-column-gap-extended ">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6f68e24 pxl-column-none"
    data-id="6f68e24" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-edce183 pxl-post-layout-post-2 elementor-widget elementor-widget-pxl_post_grid"
        data-id="edce183" data-element_type="widget" data-widget_type="pxl_post_grid.default">
          <div class="elementor-widget-container">
            <div id="pxl_post_grid-edce183-8642" class="pxl-grid pxl-blog-grid pxl-blog-grid-layout2 pxl-blog-style2 style-default"
            data-layout="masonry" data-start-page="1" data-max-pages="2" data-total="12"
            data-perpage="6" data-next-link="https://demo.bravisthemes.com/immigway/blog-list/page/2/">
              <div class="pxl-grid-inner pxl-grid-masonry row" data-gutter="15">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                  $title = $item->title->$locale;
                  $brief = $item->brief->$locale;
                  $image = $item->image != '' ? $item->image : '';
                  $date = date("F j, Y", strtotime($item->created_at));
                  $url = '/detail/'.$item->url_part.'.html';
                ?>
                <div class="pxl-grid-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 campeign">
                  <div class="pxl-item--inner " data-wow-duration="1.2s">
                    <div class="pxl-item--featured">
                      <a href="https://demo.bravisthemes.com/immigway/changes-in-recent-consultancy-styles-now-a-days/"
                      style="background-image: url(<?php echo e($image); ?>);">
                        <img decoding="async" class="no-lazyload " src="<?php echo e($image); ?>"
                        width="740" height="474" alt="<?php echo e($title); ?>"
                        title="<?php echo e($title); ?>" />
                      </a>
                    </div>
                    <div class="pxl-item--holder">
                      <div class="pxl-item--meta">
                        <div class="pxl-item--date pxl-date--box pxl-r-0">
                          <?php echo e($date); ?>

                        </div>
                      </div>
                      <h5 class="pxl-item--title">
                        <a href="<?php echo e($url); ?>">
                          <?php echo e($title); ?>

                        </a>
                      </h5>
                      <div class="pxl-item--content pxl-sz-content pxl-excerpt-line" style="-webkit-line-clamp: 2;">
                        <?php echo e($brief); ?>

                      </div>
                      <div class="pxl-item--button">
                        <a class="btn--readmore" href="<?php echo e($url); ?>">
                          <span class="btn-readmore--text">
                            <?php echo e($array_translate[strtolower('View more')]->$locale); ?>

                          </span>
                          <span class="btn-readmore--icon pxl-ml-10">
                            <i class="fas fa-arrow-right"></i>
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>

              <?php echo e($posts->withQueryString()->links('frontend.pagination.default')); ?>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <div class="elementor-element elementor-element-870fbee e-flex e-con-boxed e-con"
  data-id="870fbee" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
    <div class="e-con-inner">
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/frontend/pages/post/category.blade.php ENDPATH**/ ?>