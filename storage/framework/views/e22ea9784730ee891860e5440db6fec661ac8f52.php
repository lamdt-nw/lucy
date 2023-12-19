<?php

$page_title = $taxonomy->title->$locale ?? '';
$image_background = $taxonomy->image ? 'background-image: url('.$taxonomy->image.')' : '';

$image = $taxonomy->image ?? null;
$seo_title = $taxonomy->meta_title ?? $page_title;
$seo_keyword = $taxonomy->meta_keyword ?? null;
$seo_description = $taxonomy->meta_description ?? null;
$seo_image = $image ?? null;

?>

<?php $__env->startSection('content'); ?>

   
  <div id="pxl-page-title-elementor">
    <div data-elementor-type="wp-post" data-elementor-id="126" class="elementor elementor-126">
      <section class="elementor-section elementor-top-section elementor-element elementor-element-2b679ef elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none" style="<?php echo $image_background ?>"
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
  <div class="elementor-container">
    <div class="row pxl-content-wrap no-sidebar">
      <div id="pxl-content-area" class="pxl-content-area pxl-content-page col-12">
        <main id="pxl-content-main">
          <article id="pxl-post-230" class="post-230 page type-page status-publish hentry">
            <div class="pxl-entry-content clearfix">
              <div data-elementor-type="wp-page" data-elementor-id="230" class="elementor elementor-230">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-dc7e5ed elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
                data-id="dc7e5ed" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
                style="width: 1519px; left: 0px;">
                  <div class="elementor-container elementor-column-gap-extended ">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6865d72 pxl-column-none"
                    data-id="6865d72" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        
                        <div class="elementor-element elementor-element-51df996 pxl-post-layout-service-2 elementor-widget elementor-widget-pxl_post_grid" style="margin-top: 50px;" 
                        data-id="51df996" data-element_type="widget" data-widget_type="pxl_post_grid.default">
                          <div class="elementor-widget-container">
                            <div id="pxl_post_grid-51df996-1287" class="pxl-grid pxl-service-grid pxl-service-grid-layout2 pxl-grid--6items  "
                            data-layout="masonry" data-start-page="1" data-max-pages="2" data-total="7"
                            data-perpage="6" data-next-link="#">
                              <div class="pxl-grid-inner pxl-grid-masonry row" data-gutter="15" style="height: 1154.38px;">
                                
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                  $title = $item->title->$locale;
                                  $brief = $item->brief->$locale;
                                  $image = $item->image != '' ? $item->image : '';
                                  $date = date('H:i d/m/Y', strtotime($item->created_at));
                                  $url = '/service-detail/'.$item->url_part.'.html';
                                ?>
                                <div class="pxl-grid-item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 pte"
                                style="position: absolute; left: 0%; top: 0px;">
                                  <div class="pxl-item--inner " data-wow-duration="1.2s">
                                    <div class="pxl-item--featured item-image">
                                      <a class="pxl-wrap-link" href="<?php echo e($url); ?>">
                                        <img decoding="async" class="" src="<?php echo e($image); ?>"
                                        width="410" height="270" alt="PTE Exam Preparation" title="<?php echo e($title); ?>">
                                      </a>
                                    </div>
                                    <div class="pxl-item--holder">
                                      
                                      <h3 class="pxl-item--title">
                                        <a href="<?php echo e($url); ?>">
                                          <?php echo e($title); ?>

                                        </a>
                                      </h3>
                                      <div class="pxl-line-paper">
                                      </div>
                                      <div class="pxl-item--content pxl-excerpt-line" style="-webkit-line-clamp: 3;">
                                        <?php echo e($brief); ?>

                                      </div>
                                      <div class="pxl-item--button">
                                        <a class="btn--readmore" href="<?php echo e($url); ?>">
                                          <span class="btn-readmore--text">
                                            View More
                                          </span>
                                          <span class="btn-readmore--icon pxl-ml-10">
                                            <i class="flaticon-right-arrow-2 rtl-reverse">
                                            </i>
                                          </span>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="grid-sizer col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                </div>
                              </div>
                              
                              <?php echo e($posts->withQueryString()->links('frontend.pagination.default')); ?>

                              
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

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp74\htdocs\duhoc\resources\views/frontend/pages/service/category.blade.php ENDPATH**/ ?>