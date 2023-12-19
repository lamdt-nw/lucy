

<?php
$image = $detail->image ? 'background-image: url('.$detail->image.')' : '';
$page_title = $detail->title->$locale ?? '';

$seo_title = $detail->title->$locale ?? null;
$seo_keyword = $detail->meta_keyword ?? null;
$seo_description = $detail->content->$locale ?? null;
$seo_image = $image ?? null;

$title = $detail->title->$locale;
$content = $detail->content->$locale;
$image = $detail->image != '' ? $detail->image : '';
$date = date("F j, Y", strtotime($detail->created_at));
?>

<?php $__env->startSection('content'); ?>

<link rel='stylesheet' href=<?php echo e(asset('themes/frontend/lucy/new_js/pxl-style.min.css?ver=1.0.0')); ?> media='all' />
<link rel='stylesheet' href=<?php echo e(asset('themes/frontend/lucy/new_js/pxl-grid.min.css?ver=1.0.0')); ?>  media='all' />
<style>
  .widget-title{
    font-size: 2em;
    padding-bottom: 10px;
    margin-bottom: 0px;
  }
  img {
    border-radius: 10px;
  }
</style>
<div id="pxl-main" style="padding-bottom: 50px;padding-top: 50px;">
  <div class="container">
    <div class="row pxl-content-wrap pxl-has-sidebar pxl-sidebar-right">
      <div id="pxl-content-area" class="pxl-content-area pxl-content-post col-12 col-lg-8">
        <main id="pxl-content-main">
          <article id="pxl-post-186" class="pxl---post post-186 post type-post status-publish format-standard has-post-thumbnail hentry category-consultation tag-consultation">
            <div class="pxl-item--image">
              <img width="1300" height="813" src="<?php echo e($image); ?>"
              class="attachment-immigway-large size-immigway-large wp-post-image" alt=""
              decoding="async" srcset="<?php echo e($image); ?>"
              sizes="(max-width: 1300px) 100vw, 1300px" />
            </div>
            <div class="pxl-item--holder">
              <span class="pxl-item--date">
                <?php echo e($date); ?>

              </span>
              <h2 class="pxl-item-title" style="font-size: 3em;">
                <?php echo e($title); ?>

              </h2>
              <div class="pxl-item--content clearfix">
                <div data-elementor-type="wp-post" data-elementor-id="186" class="elementor elementor-186">
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-09564fe elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
                  data-id="09564fe" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default ">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5988a00 pxl-column-none"
                      data-id="5988a00" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div class="elementor-element elementor-element-be4c3f7 elementor-widget elementor-widget-pxl_text_editor"
                          data-id="be4c3f7" data-element_type="widget" data-widget_type="pxl_text_editor.default">
                            <div class="elementor-widget-container">
                              <div class="pxl-text-editor">
                                <div class="pxl-item--inner " data-wow-delay="ms">
                                  <?php echo $content; ?>

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
          </article>
        </main>
        </div>
        <div id="pxl-sidebar-area" class="pxl-sidebar-area pxl-sidebar-post col-12 col-lg-4">
          <div class="pxl-sidebar-sticky">
            <section id="pxl_recent_posts-2" class="widget widget_pxl_recent_posts">
              <div class="widget-content">
                <h2 class="widget-title" style="font-size: 2em;">
                  <span>
                    <?php echo e($array_translate[strtolower('Recent posts')]->$locale); ?>

                  </span>
                </h2>
                <div class="pxl--items">
                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $title = $item->title->$locale;
                    $image = $item->image != '' ? $item->image : '';
                    $date = date("F j, Y", strtotime($item->created_at));
                    $url = '/detail/'.$item->url_part.'.html';
                    ?>
                    <div class="pxl--item">
                      <div class="pxl-item--img pxl-mr-20">
                        <a href="<?php echo e($url); ?>">
                          <img src="<?php echo e($image); ?>"
                          alt="<?php echo e($title); ?>" />
                        </a>
                      </div>
                      <div class="pxl-item--meta">
                        <h4 class="pxl-item--title">
                          <a href="<?php echo e($url); ?>"
                          title="<?php echo e($title); ?>">
                            <?php echo e($title); ?>

                          </a>
                        </h4>
                        <div class="pxl-item--date">
                          <?php echo e($date); ?>

                        </div>
                      </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
            </section>
            <section id="categories-2" class="widget widget_categories">
              <div class="widget-content">
                <h2 class="widget-title" style="font-size: 2em;">
                  <span>
                    <?php echo e($array_translate[strtolower('Services')]->$locale); ?>

                  </span>
                </h2>
                <ul>
                  <?php $__currentLoopData = $taxonomy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($taxo->parent_id != ''): ?>
                    <li class="cat-item cat-item-1">
                      <a href="/<?php echo e($taxo->taxonomy.'/'.$taxo->url_part.'.html'); ?>">
                        <?php echo e($taxo->title->$locale); ?>

                        
                      </a>
                    </li>
                    <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- #main -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/frontend/pages/post/detail.blade.php ENDPATH**/ ?>