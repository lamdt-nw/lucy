<?php
  
  $params['status'] = 'active';
  $params['news_position'] = '1';
  $items = App\Http\Services\ContentService::getCmsPost($params)->limit(4)
  ->get();

?>

<?php if(count($items) >0): ?>


<section class="elementor-section elementor-top-section elementor-element elementor-element-df1a466 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
data-id="df1a466" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
style="width: 1519px; left: 0px;">
  <div class="elementor-container elementor-column-gap-extended ">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-848dfcc pxl-column-none"
    data-id="848dfcc" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($banner->block_code == 'news' and $banner->parent_id == ''): ?>
        <div class="elementor-element elementor-element-8c99c9a elementor-widget elementor-widget-pxl_heading"
        data-id="8c99c9a" data-element_type="widget" data-widget_type="pxl_heading.default">
          <div class="elementor-widget-container">
            <div id="pxl-pxl_heading-8c99c9a-6474" class="pxl-heading px-sub-title-default-style">
              <div class="pxl-heading--inner">
                <div class="pxl-item--subtitle px-sub-title-default pxl-split-text split-in-left"
                data-wow-delay="ms" style="perspective: 400px;">
                  <div class="split-line" style="display: block; text-align: center; position: relative;">
                    <span class="pxl-item--subtext">
                      <span class="pxl-item--icon pxl-mr-1">
                        <i aria-hidden="true" class="fas fa-paper-plane">
                        </i>
                      </span>
                      <?php echo e($banner->title->$locale); ?>

                      
                      <span class="pxl-item--subdivider">
                      </span>
                    </span>
                  </div>
                </div>
                <h2 class="pxl-item--title pxl-split-text split-in-left" data-wow-delay="ms"
                style="perspective: 400px;">
                  <div class="split-line" style="display: block; text-align: center; position: relative;">
                    <?php echo e($banner->title->$brief); ?>

                  </div>
                  
                </h2>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="elementor-element elementor-element-120de03 pxl-post-layout-post-2 elementor-invisible elementor-widget elementor-widget-pxl_post_grid"
        data-id="120de03" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
        data-widget_type="pxl_post_grid.default">
          <div class="elementor-widget-container">
            <div id="pxl_post_grid-120de03-3978" class="pxl-grid pxl-blog-grid pxl-blog-grid-layout2 pxl-blog-style2 style-default"
            data-layout="masonry" data-start-page="1" data-max-pages="3" data-total="12"
            data-perpage="4" data-next-link="#">
              <div class="pxl-grid-inner pxl-grid-masonry row" data-gutter="15" style="height: 706px;">
                

                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="pxl-grid-item col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 campeign"
                style="position: absolute; left: 0%; top: 0px;">
                  <div class="pxl-item--inner " data-wow-duration="1.2s">
                    <div class="pxl-item--featured">
                      <a href="/detail/<?php echo e($item->url_part); ?>.html"
                      style="background-image: url(<?php echo e($item->image); ?>);">
                        <img decoding="async" class="no-lazyload " src="<?php echo e($item->image); ?>"
                        width="740" height="474" alt="<?php echo e($item->title); ?>"
                        title="<?php echo e($item->title); ?>">
                      </a>
                    </div>
                    <div class="pxl-item--holder">
                      
                      <h5 class="pxl-item--title">
                        <a href="/detail/<?php echo e($item->url_part); ?>.html">
                          <?php echo e($item->title); ?>

                        </a>
                      </h5>
                      <div class="pxl-item--content pxl-sz-content pxl-excerpt-line" style="-webkit-line-clamp: 2;">
                        <?php echo e($item->brief); ?>

                      </div>
                      <div class="pxl-item--button">
                        <a class="btn--readmore" href="/detail/<?php echo e($item->url_part); ?>.html">
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
                
                <div class="grid-sizer col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>            
<?php /**PATH D:\xampp7\htdocs\duhoc\resources\views/frontend/element/tinnoibat.blade.php ENDPATH**/ ?>