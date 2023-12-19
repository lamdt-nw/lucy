<?php 
$taxonomy_title = $array_translate[strtolower('Faqs')]->$locale;;
$image_background = '';


?>

<?php $__env->startSection('content'); ?>

<style type="text/css">
#pxl-wapper #pxl-main {
    padding-top: 100px;
    padding-bottom: 100px;
}
</style>
	<link rel='stylesheet' id='ekit-widget-styles-css' href="<?php echo e(asset('themes/frontend/css/post-251.css')); ?>"
    media='all' />
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
                
				<section class="elementor-section elementor-top-section elementor-element elementor-element-40f7132 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
					data-id="40f7132" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
					style="width: 1519px; left: 0px;">
					  <div class="elementor-container elementor-column-gap-extended ">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a94122a pxl-column-none"
						data-id="a94122a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						  <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-background-overlay">
							</div>
							<div class="elementor-element elementor-element-776177b elementor-widget elementor-widget-pxl_heading"
							data-id="776177b" data-element_type="widget" data-widget_type="pxl_heading.default">
							  <div class="elementor-widget-container">
								<div id="pxl-pxl_heading-776177b-2765" class="pxl-heading px-sub-title-default-style">
								  <div class="pxl-heading--inner">
									<h1 class="pxl-item--title " data-wow-delay="ms">
									  <?php echo e($array_translate[strtolower('WantToAsk')]->$locale); ?>

									</h1>
								  </div>
								</div>
							  </div>
							</div>
							<div class="elementor-element elementor-element-0887c60 elementor-widget elementor-widget-pxl_contact_form"
							data-id="0887c60" data-element_type="widget" data-widget_type="pxl_contact_form.default">
							  <div class="elementor-widget-container">
								<div class="pxl-contact-form pxl-contact-form1 btn-w-auto   " data-wow-delay="ms">
								  <div class="wpcf7 js" id="wpcf7-f1068-p251-o1" lang="en-US" dir="ltr">
									<div class="screen-reader-response">
									  <p role="status" aria-live="polite" aria-atomic="true">
									  </p>
									  <ul>
									  </ul>
									</div>
									<form action="<?php echo e(route('frontend.contact.store')); ?>" method="post" class="wpcf7-form init"
									aria-label="Contact form" data-status="init">
									  <?php echo csrf_field(); ?>
									  <div class="row">
										<div class="col-lg-4 col-md-4 col-sm-12">
										  <div class="pxl--item">
											<p>
											  <span class="wpcf7-form-control-wrap" data-name="your-name">
												<input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
												aria-required="true" aria-invalid="false" placeholder="Your Name" value=""
												type="text" name="name" required>
											  </span>
											</p>
										  </div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-12">
										  <div class="pxl--item">
											<p>
											  <span class="wpcf7-form-control-wrap" data-name="your-phone">
												<input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
												aria-required="true" aria-invalid="false" placeholder="Phone Number" value=""
												type="text" name="phone" required>
											  </span>
											</p>
										  </div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-12">
										  <div class="pxl--item">
											<p>
											  <span class="wpcf7-form-control-wrap" data-name="your-email">
												<input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
												aria-required="true" aria-invalid="false" placeholder="E-mail Address"
												value="" type="email" name="email" required>
											  </span>
											</p>
										  </div>
										</div>
									  </div>
									  <div class="pxl--item">
										<p>
										  <span class="wpcf7-form-control-wrap" data-name="your-message">
											<textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
											 placeholder="Question Here" name="content"></textarea>
										  </span>
										</p>
									  </div>
									  <div class="pxl--item">
										<p>
										  <button type="submit" class="wpcf7-submit btn btn-skew">
											<span>
											  <?php echo e($array_translate[strtolower('Submit')]->$locale); ?>

											</span>
										  </button>
										</p>
									  </div>
									  <div class="wpcf7-response-output" aria-hidden="true">
									  </div>
									</form>
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
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/frontend/pages/home/faqs.blade.php ENDPATH**/ ?>