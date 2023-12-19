<?php
$title_detail = $detail->title->$locale;
$brief_detail = $detail->brief->$locale;
$content = $detail->content->$locale;
$image = $detail->image != '' ? $detail->image : null;

// For taxonomy
$taxonomy_title = $taxonomy->title->$locale ?? null;
$image_background = $taxonomy->json_params->image ?? null;;

$seo_title = $detail->meta_title ?? $title_detail;
$seo_keyword = $detail->meta_keyword ?? null;
$seo_description = $detail->meta_description ?? $brief_detail;
$seo_image = $image ?? ($image_thumb ?? null);
//echo "AAAAAAAAAAAA".$content;die;

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
      <div id="pxl-content-area" class="pxl-content-area pxl-content-post col-12 col-lg-8">
        <main id="pxl-content-main">
          <article id="pxl-post-22" class="pxl---post post-22 post type-post status-publish format-standard has-post-thumbnail hentry category-business category-campeign tag-education tag-finance tag-marketing">
            
            <div class="pxl-item--holder">
              
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
            </div>
            
          </article>
          
        </main>
      </div>

      <div id="pxl-sidebar-area" class="pxl-sidebar-area pxl-sidebar-post col-12 col-lg-4">
        <div class="pxl-sidebar-sticky">
          <section id="search-2" class="widget widget_search">
            <div class="widget-content">
              <form role="search" method="post" class="search-form" action="<?php echo e(route('frontend.cms.news_search')); ?>">
                <div class="searchform-wrap">
                  <input type="text" placeholder="Search" name="keyword" class="search-field">
                  <button type="submit" class="search-submit">
                    <i class="caseicon-search">
                    </i>
                  </button>
                </div>
              </form>
            </div>
          </section>
          
          <section id="categories-2" class="widget widget_categories">
            <div class="widget-content">
              <h2 class="widget-title">
                <span>
				  <?php echo e($array_translate[strtolower('Categories')]->$locale); ?>

                </span>
              </h2>
              <ul>
              <?php
                foreach($taxonomy_all as $taxonomy){
                $hienthi = trim($taxonomy->hienthi,';');
                $vitrihienthi = explode(';',$hienthi); // chuyển về mảng
                if(in_array('1',$vitrihienthi)){
              ?>
                <li class="cat-item cat-item-1">
                  <a href="/<?php echo e($taxonomy->taxonomy.'/'.$taxonomy->url_part.'.html'); ?>" class="pxl-rm-arrow">
                    <?php echo e($taxonomy->title->$locale); ?>

                  </a>
                </li>
              <?php }} ?>
              </ul>
            </div>
          </section>
          
			<?php echo $__env->make('frontend.element.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <section id="pxl_recent_posts-2" class="widget widget_pxl_recent_posts">
            <div class="widget-content">
              <h2 class="widget-title">
                <span>
					<?php echo e($array_translate[strtolower('RecentPosts')]->$locale); ?>

                </span>
              </h2>
              <div class="pxl--items">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                  $title = $item->title->$locale;
                  $brief = $item->brief->$locale;
                  $image = $item->image != '' ? $item->image : '';
                  $date = date('H:i d/m/Y', strtotime($item->created_at));
                  $url = '/detail/'.$item->url_part.'.html';
                ?>
                <div class="pxl--item">
                  <div class="pxl-item--img pxl-mr-20">
                    <a href="<?php echo e($url); ?>">
                      <img src="<?php echo e($image); ?>"
                      alt="<?php echo e($title); ?>">
                    </a>
                  </div>
                  <div class="pxl-item--meta">
                    <h4 class="pxl-item--title">
                      <a href="<?php echo e($url); ?>"
                      title="<?php echo e($title); ?>">
                        <?php echo e($title); ?>

                      </a>
                    </h4>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </section>
			
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vb2kcoqr09ph/chovay.nvoting.com/resources/views/frontend/pages/post/detail.blade.php ENDPATH**/ ?>