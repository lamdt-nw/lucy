
<?php 
$taxonomy_title = 'Faqs';
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

  <?php 
$title = $brief = $image = $image_background = $url_link = $url_link_title = '';
foreach($blocksContent as $banner){
  if($banner->block_code == 'faq' and $banner->parent_id == ''){
    $title=$banner->title->$locale;
    $brief=$banner->brief->$locale;
    $image=$banner->image;
    $image_background=$banner->image_background;
    $url_link = $banner->url_link;
    $url_link_title = $banner->url_link_title->$locale;
  }
}

?>
<div id="pxl-main">
  <div class="elementor-container">
    <div class="row pxl-content-wrap no-sidebar">
      <div id="pxl-content-area" class="pxl-content-area pxl-content-page col-12">
        <main id="pxl-content-main">
          <article id="pxl-post-251" class="post-251 page type-page status-publish hentry">
            <div class="pxl-entry-content clearfix">
              <div data-elementor-type="wp-page" data-elementor-id="251" class="elementor elementor-251">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-8758114 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
                data-id="8758114" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
                style="width: 1519px; left: 0px;">
                  <div class="elementor-container elementor-column-gap-extended ">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4a9b886 pxl-column-none"
                    data-id="4a9b886" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-1b4e20b elementor-widget elementor-widget-pxl_accordion"
                        data-id="1b4e20b" data-element_type="widget" data-widget_type="pxl_accordion.default">
                          <div class="elementor-widget-container">
                            <div class="pxl-accordion-wrap ">
                              <div class="pxl-accordion pxl-accordion1 style1 " data-wow-delay="ms">
                                <?php $i=0; foreach($blocksContent as $banner){
                                if($banner->block_code == 'faq' and $banner->parent_id != ''){ ?>
                                <div class="pxl--item <?php if($i==0) echo  'active'; ?>">
                                  <h5 class="pxl-item--title" data-target="#pxl_accordion-1b4e20b-5110-<?php echo e($banner->id); ?>">
                                    <span class="pxl-title--text">
                                      <?php echo e($banner->title->$locale); ?>

                                    </span>
                                    <i class="pxl-icon--plus">
                                    </i>
                                  </h5>
                                  <div id="pxl_accordion-1b4e20b-5110-<?php echo e($banner->id); ?>" class="pxl-item--content"
                                  <?php if($i==0) echo 'style="display: block;"'; ?>>
                                    <?php echo $banner->content->$locale; ?>

                                  </div>
                                </div>
                                <?php $i++; }} ?>
                                
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
          </article>
        </main>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp74\htdocs\duhoc\resources\views/frontend/pages/home/faqs.blade.php ENDPATH**/ ?>