<?php 
$title = $brief = $image = $image_background = $url_link = $url_link_title = '';
foreach($blocksContent as $banner){
  if($banner->block_code == 'faq' and $banner->parent_id == ''){
    $title=$banner->title;
    $brief=$banner->brief;
    $image=$banner->image;
    $image_background=$banner->image_background;
    $url_link = $banner->url_link;
    $url_link_title = $banner->url_link_title->$locale;
  }
}

?>

<section class="elementor-section elementor-top-section elementor-element elementor-element-8fb3792 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-full-content-with-space-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
      data-id="8fb3792" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
      style="width: 1519px; left: 0px;">
        <div class="elementor-container elementor-column-gap-extended ">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-709b1b6 pxl-column-none"
          data-id="709b1b6" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              
              <div class="elementor-element elementor-element-75a0943 elementor-absolute elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-mobile_extra elementor-widget elementor-widget-pxl_image"
              data-id="75a0943" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
              data-widget_type="pxl_image.default">
                <div class="elementor-widget-container">
                  <div id="pxl_image-75a0943-8989" class="pxl-image-single  style-default wow skewIn"
                  data-wow-delay="ms" style="visibility: hidden; animation-name: none;">
                    <div class="pxl-item--inner " data-wow-delay="120ms">
                      <div class="pxl-item--image" data-parallax-value="">
                        <img decoding="async" width="786" height="802" src="<?php echo e($image); ?>"
                        class="no-lazyload attachment-full" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="elementor-element elementor-element-d1e139a elementor-absolute elementor-widget__width-auto elementor-widget elementor-widget-pxl_image"
              data-id="d1e139a" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
              data-widget_type="pxl_image.default">
                <div class="elementor-widget-container">
                  <div id="pxl_image-d1e139a-2556" class="pxl-image-single  style-default "
                  data-wow-delay="ms">
                    <div class="pxl-item--inner " data-wow-delay="120ms">
                      <div class="pxl-item--image" data-parallax-value="">
                        <img decoding="async" width="271" height="758" src="<?php echo e($image_background); ?>"
                        class="no-lazyload attachment-full" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <section class="elementor-section elementor-inner-section elementor-element elementor-element-08c31e5 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
              data-id="08c31e5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default ">
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f59a038 pxl-column-none"
                  data-id="f59a038" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                  </div>
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-aa62ff5 pxl-column-none"
                  data-id="aa62ff5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      
                      <div class="elementor-element elementor-element-387a759 elementor-widget elementor-widget-pxl_heading"
                      data-id="387a759" data-element_type="widget" data-widget_type="pxl_heading.default">
                        <div class="elementor-widget-container">
                          <div id="pxl-pxl_heading-387a759-1836" class="pxl-heading px-sub-title-default-style">
                            <div class="pxl-heading--inner">
                              <div class="pxl-item--subtitle px-sub-title-default pxl-split-text split-in-left"
                              data-wow-delay="ms" style="perspective: 400px;">
                                <div class="split-line" style="display: block; text-align: left; position: relative;">
                                  <span class="pxl-item--subtext">
                                    <span class="pxl-item--icon pxl-mr-1">
                                      <i aria-hidden="true" class="fas fa-paper-plane">
                                      </i>
                                    </span>
                                    <?php echo e($title); ?>

                                    
                                    <span class="pxl-item--subdivider">
                                    </span>
                                  </span>
                                </div>
                              </div>
                              <h2 class="pxl-item--title pxl-split-text split-in-left" data-wow-delay="ms"
                              style="perspective: 400px;">
                                <div class="split-line" style="display: block; text-align: left; position: relative;">
                                  
                                  <?php echo e($brief); ?>

                                  
                                </div>
                              </h2>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="elementor-element elementor-element-1c8f8a4 elementor-widget elementor-widget-pxl_accordion"
                      data-id="1c8f8a4" data-element_type="widget" data-widget_type="pxl_accordion.default">
                        <div class="elementor-widget-container">
                          <div class="pxl-accordion-wrap ">
                            <div class="pxl-accordion pxl-accordion1 style2 wow skewIn" data-wow-delay="ms"
                            style="visibility: hidden; animation-name: none;">
                              <?php $i=0; foreach($blocksContent as $banner){
                                if($banner->block_code == 'faq' and $banner->parent_id != ''){ ?>
                              <div class="pxl--item <?php if($i==0) echo  'active'; ?>">
                                <h5 class="pxl-item--title" data-target="#pxl_accordion-1c8f8a4-1922-<?php echo e($banner->id); ?>">
                                  <span class="pxl-title--icon">
                                    <i aria-hidden="true" class="fas fa-angle-down">
                                    </i>
                                  </span>
                                  <span class="pxl-title--text">
                                    <?php echo e($banner->title->$locale); ?>

                                  </span>
                                </h5>
                                <div id="pxl_accordion-1c8f8a4-1922-<?php echo e($banner->id); ?>" class="pxl-item--content"
                                <?php if($i==0) echo 'style="display: block;"'; ?>>
                                  <?php echo $banner->content->$locale; ?>

                                </div>
                              </div>

                            <?php $i++; }} ?>

                            </div>
                          </div>
                        </div>
                      </div>

                      <?php if($url_link_title!=''){ ?>
                      <div class="elementor-element elementor-element-a682b77 elementor-widget elementor-widget-pxl_button"
                      data-id="a682b77" data-element_type="widget" data-widget_type="pxl_button.default">
                        <div class="elementor-widget-container">
                          <div id="pxl-pxl_button-a682b77-8365" class="pxl-button wow skewIn" data-wow-delay="ms"
                          style="visibility: hidden; animation-name: none;">
                            <a href="<?php echo e($url_link); ?>" class="btn pxl-icon-active btn-default wow skewIn pxl-icon--right"
                            data-wow-delay="ms" style="visibility: hidden; animation-name: none;">
                              <i aria-hidden="true" class="flaticon flaticon-right-arrow-1">
                              </i>
                              <span class="pxl--btn-text " data-text="View More Faq’s">
                                <?php echo e($url_link_title); ?>

                              </span>
                              <span class="pxl--text-wrap">
                                <span class="pxl--btn-text1 ">
                                  <?php echo e($url_link_title); ?>

                                </span>
                                <span class="pxl--btn-text2 ">
                                  <?php echo e($url_link_title); ?>

                                </span>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>
<?php /**PATH D:\xampp7\htdocs\duhoc\resources\views/frontend/element/follow.blade.php ENDPATH**/ ?>