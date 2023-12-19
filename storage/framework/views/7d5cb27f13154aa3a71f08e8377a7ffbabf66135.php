<?php

$page_title = $taxonomy->title->$locale ?? '';
$image_background = $taxonomy->image ?? '';

$image = $taxonomy->image ?? null;
$seo_title = $taxonomy->meta_title ?? $page_title;
$seo_keyword = $taxonomy->meta_keyword ?? null;
$seo_description = $taxonomy->meta_description ?? null;
$seo_image = $image ?? null;

?>

<?php $__env->startSection('content'); ?>

<link rel='stylesheet' href=<?php echo e(asset('themes/frontend/lucy/new_js/post-1126.css?ver=1702741349')); ?> media='all' />
<style>
  .elementor-1126 .elementor-element.elementor-element-116e842e:not(.elementor-motion-effects-element-type-background){
    background-image: url(<?php echo e($taxonomy->json_params->image_background); ?>);
  }
  /*! elementor - v3.15.0 - 02-08-2023 */ .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading
  .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading
  .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading
  .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading
  .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading
  .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading
  .elementor-heading-title.elementor-size-xxl{font-size:59px}
  /*! elementor - v3.15.0 - 02-08-2023 */ .elementor-widget-text-editor.elementor-drop-cap-view-stacked
  .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed
  .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default)
  .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default)
  .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor
  .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor
  .elementor-drop-cap-letter{display:inline-block}
  /*! elementor-pro - v3.14.0 - 26-06-2023 */ .elementor-widget-price-list
  .elementor-price-list{list-style:none;padding:0;margin:0}.elementor-widget-price-list
  .elementor-price-list li{margin:0}.elementor-price-list li:not(:last-child){margin-bottom:20px}.elementor-price-list
  .elementor-price-list-image{max-width:50%;flex-shrink:0;padding-right:25px}.elementor-price-list
  .elementor-price-list-image img{width:100%}.elementor-price-list .elementor-price-list-header,.elementor-price-list
  .elementor-price-list-item,.elementor-price-list .elementor-price-list-text{display:flex}.elementor-price-list
  .elementor-price-list-item{align-items:flex-start}.elementor-price-list
  .elementor-price-list-item .elementor-price-list-text{align-items:flex-start;flex-wrap:wrap;flex-grow:1}.elementor-price-list
  .elementor-price-list-item .elementor-price-list-header{align-items:center;flex-basis:100%;font-size:19px;font-weight:600;margin-bottom:10px;justify-content:space-between}.elementor-price-list
  .elementor-price-list-item .elementor-price-list-title{max-width:80%}.elementor-price-list
  .elementor-price-list-item .elementor-price-list-price{font-weight:600}.elementor-price-list
  .elementor-price-list-item p.elementor-price-list-description{flex-basis:100%;font-size:14px;margin:0}.elementor-price-list
  .elementor-price-list-item .elementor-price-list-separator{flex-grow:1;margin-left:10px;margin-right:10px;border-bottom-style:dotted;border-bottom-width:2px;height:0}.elementor-price-table{text-align:center}.elementor-price-table
  .elementor-price-table__header{background:var(--e-price-table-header-background-color,#555);padding:20px
  0}.elementor-price-table .elementor-price-table__heading{margin:0;padding:0;line-height:1.2;font-size:24px;font-weight:600;color:#fff}.elementor-price-table
  .elementor-price-table__subheading{font-size:13px;font-weight:400;color:#fff}.elementor-price-table
  .elementor-price-table__original-price{margin-right:15px;text-decoration:line-through;font-size:.5em;line-height:1;font-weight:400;align-self:center}.elementor-price-table
  .elementor-price-table__original-price .elementor-price-table__currency{font-size:1em;margin:0}.elementor-price-table
  .elementor-price-table__price{display:flex;justify-content:center;align-items:center;flex-wrap:wrap;flex-direction:row;color:#555;font-weight:800;font-size:65px;padding:40px
  0}.elementor-price-table .elementor-price-table__price .elementor-typo-excluded{line-height:normal;letter-spacing:normal;text-transform:none;font-weight:400;font-size:medium;font-style:normal}.elementor-price-table
  .elementor-price-table__after-price{display:flex;flex-wrap:wrap;text-align:left;align-self:stretch;align-items:flex-start;flex-direction:column}.elementor-price-table
  .elementor-price-table__integer-part{line-height:.8}.elementor-price-table
  .elementor-price-table__currency,.elementor-price-table .elementor-price-table__fractional-part{line-height:1;font-size:.3em}.elementor-price-table
  .elementor-price-table__currency{margin-right:3px}.elementor-price-table
  .elementor-price-table__period{width:100%;font-size:13px;font-weight:400}.elementor-price-table
  .elementor-price-table__features-list{list-style-type:none;margin:0;padding:0;line-height:1;color:var(--e-price-table-features-list-color)}.elementor-price-table
  .elementor-price-table__features-list li{font-size:14px;line-height:1;margin:0;padding:0}.elementor-price-table
  .elementor-price-table__features-list li .elementor-price-table__feature-inner{margin-left:15px;margin-right:15px}.elementor-price-table
  .elementor-price-table__features-list li:not(:first-child):before{content:"";display:block;border:0
  solid hsla(0,0%,47.8%,.3);margin:10px 12.5%}.elementor-price-table .elementor-price-table__features-list
  i{margin-right:10px;font-size:1.3em}.elementor-price-table .elementor-price-table__features-list
  svg{margin-right:10px;fill:var(--e-price-table-features-list-color);height:1.3em;width:1.3em}.elementor-price-table
  .elementor-price-table__features-list svg~*{vertical-align:text-top}.elementor-price-table
  .elementor-price-table__footer{padding:30px 0}.elementor-price-table .elementor-price-table__additional_info{margin:0;font-size:13px;line-height:1.4}.elementor-price-table__ribbon{position:absolute;top:0;left:auto;right:0;transform:rotate(90deg);width:150px;overflow:hidden;height:150px}.elementor-price-table__ribbon-inner{text-align:center;left:0;width:200%;transform:translateY(-50%)
  translateX(-50%) translateX(35px) rotate(-45deg);margin-top:35px;font-size:13px;line-height:2;font-weight:800;text-transform:uppercase;background:#000}.elementor-price-table__ribbon.elementor-ribbon-left{transform:rotate(0);left:0;right:auto}.elementor-price-table__ribbon.elementor-ribbon-right{transform:rotate(90deg);left:auto;right:0}.elementor-widget-price-table
  .elementor-widget-container{overflow:hidden;background-color:#f9fafa}.e-con-inner>.elementor-widget-price-list,.e-con>.elementor-widget-price-list{width:var(--container-widget-width);--flex-grow:var(--container-widget-flex-grow)}
  /*! elementor - v3.15.0 - 02-08-2023 */ .elementor-column .elementor-spacer-inner{height:var(--spacer-size)}.e-con{--container-widget-width:100%}.e-con-inner>.elementor-widget-spacer,.e-con>.elementor-widget-spacer{width:var(--container-widget-width,var(--spacer-size));--align-self:var(--container-widget-align-self,initial);--flex-shrink:0}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,.e-con>.elementor-widget-spacer>.elementor-widget-container,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer{height:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner{height:var(--container-widget-height,var(--spacer-size))}
</style>
<main id="content" class="site-main post-1126 page type-page status-publish hentry">
  <div class="page-content">
    <div data-elementor-type="wp-page" data-elementor-id="1126" class="elementor elementor-1126"
    data-elementor-post-type="page">
      <section class="elementor-section elementor-top-section elementor-element elementor-element-116e842e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
      data-id="116e842e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay">
        </div>
        <div class="elementor-container elementor-column-gap-default">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3496ee9c"
          data-id="3496ee9c" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-2b4485cc elementor-widget elementor-widget-heading"
              data-id="2b4485cc" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                  <h1 class="elementor-heading-title elementor-size-default">
                    <?php echo e($taxonomy->title->$locale ?? ''); ?>

                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="elementor-element elementor-element-32241fc e-grid e-con-boxed e-con"
      data-id="32241fc" data-element_type="container" data-settings="{&quot;grid_columns_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;grid_rows_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;content_width&quot;:&quot;boxed&quot;,&quot;grid_outline&quot;:&quot;yes&quot;,&quot;grid_columns_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_columns_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_rows_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
        <div class="e-con-inner">
          <div class="elementor-element elementor-element-f2bf273 e-con-full e-flex e-con"
          data-id="f2bf273" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
            <div class="elementor-element elementor-element-d7bc2fa elementor-widget elementor-widget-heading"
            data-id="d7bc2fa" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">
                  <?php echo e($taxonomy->title->$locale ?? ''); ?>

                </h2>
              </div>
            </div>
            <div class="elementor-element elementor-element-6c7916d elementor-widget elementor-widget-text-editor"
            data-id="6c7916d" data-element_type="widget" data-widget_type="text-editor.default">
              <div class="elementor-widget-container">
                
                <?php echo $taxonomy->content->$locale ?? ''; ?>

              </div>
            </div>
          </div>
          <div class="elementor-element elementor-element-1d7ff5e elementor-widget elementor-widget-image"
          data-id="1d7ff5e" data-element_type="widget" data-widget_type="image.default">
            <div class="elementor-widget-container">
              <img decoding="async" width="683" height="683" src="<?php echo e($taxonomy->json_params->image); ?>"
              class="attachment-large size-large wp-image-2254" alt="" srcset="<?php echo e($taxonomy->json_params->image); ?>"
              sizes="(max-width: 683px) 100vw, 683px" />
            </div>
          </div>
        </div>
      </div>

      <div class="elementor-element elementor-element-3d4a647 e-grid e-con-boxed e-con"
      data-id="3d4a647" data-element_type="container" data-settings="{&quot;grid_columns_grid&quot;:{&quot;unit&quot;:&quot;custom&quot;,&quot;size&quot;:&quot;1.5fr 2fr&quot;,&quot;sizes&quot;:[]},&quot;grid_columns_grid_tablet&quot;:{&quot;unit&quot;:&quot;custom&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_columns_grid_mobile&quot;:{&quot;unit&quot;:&quot;custom&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;grid_rows_grid&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;,&quot;grid_outline&quot;:&quot;yes&quot;,&quot;grid_rows_grid_tablet&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;grid_rows_grid_mobile&quot;:{&quot;unit&quot;:&quot;fr&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
        <div class="e-con-inner">
          <div class="elementor-element elementor-element-9629f4a elementor-skin-carousel elementor-arrows-yes elementor-widget elementor-widget-media-carousel"
          data-id="9629f4a" data-element_type="widget" data-settings="{&quot;slides_per_view&quot;:&quot;1&quot;,&quot;slides_per_view_tablet&quot;:&quot;1&quot;,&quot;skin&quot;:&quot;carousel&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;show_arrows&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;loop&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}"
          data-widget_type="media-carousel.default">
            <div class="elementor-widget-container">
              <link rel="stylesheet" href="https://lucybeauty.ca/wp-content/plugins/elementor-pro/assets/css/widget-carousel.min.css">
              <div class="elementor-swiper">
                <div class="elementor-main-swiper swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="elementor-carousel-image" role="img" aria-label="IMG_0341"
                      style="background-image: url(&#039;https://lucybeauty.ca/wp-content/uploads/2023/08/IMG_0341-1.jpg&#039;)">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="elementor-carousel-image" role="img" aria-label="IMG_2456"
                      style="background-image: url(&#039;https://lucybeauty.ca/wp-content/uploads/2023/08/IMG_2456.jpg&#039;)">
                      </div>
                    </div>
                  </div>
                  <div class="elementor-swiper-button elementor-swiper-button-prev" role="button"
                  tabindex="0">
                    <i aria-hidden="true" class="eicon-chevron-left">
                    </i>
                    <span class="elementor-screen-only">
                      Previous
                    </span>
                  </div>
                  <div class="elementor-swiper-button elementor-swiper-button-next" role="button"
                  tabindex="0">
                    <i aria-hidden="true" class="eicon-chevron-right">
                    </i>
                    <span class="elementor-screen-only">
                      Next
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="elementor-element elementor-element-2f02017 e-flex e-con-boxed e-con"
          data-id="2f02017" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
            <div class="e-con-inner">
              <div class="elementor-element elementor-element-483990f elementor-widget__width-inherit elementor-widget elementor-widget-heading"
              data-id="483990f" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">
                    Classic Lash Extension
                  </h2>
                </div>
              </div>
              <div class="elementor-element elementor-element-1f3cbf0 elementor-widget elementor-widget-text-editor"
              data-id="1f3cbf0" data-element_type="widget" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">
                  <p>
                    The classic set is one individual extension applied to one natural lash.
                    Classic lash extension will be best suited to clients who already have
                    a lot of natural lashes and just want to add more length. Classic lash
                    will create a more natural looking eyelashes.
                  </p>
                </div>
              </div>
              <div class="elementor-element elementor-element-00419d6 e-flex e-con-boxed e-con"
              data-id="00419d6" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
                <div class="e-con-inner">
                  <div class="elementor-element elementor-element-f87bf5c elementor-widget elementor-widget-heading"
                  data-id="f87bf5c" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                      <h3 class="elementor-heading-title elementor-size-default">
                        Classic Lash Extensions
                      </h3>
                    </div>
                  </div>
                  <div class="elementor-element elementor-element-8485bcf elementor-widget elementor-widget-price-list"
                  data-id="8485bcf" data-element_type="widget" data-widget_type="price-list.default">
                    <div class="elementor-widget-container">
                      
                      <ul class="elementor-price-list">
                        <li>
                          <a class="elementor-price-list-item" href="#">
                            <div class="elementor-price-list-text">
                              <div class="elementor-price-list-header">
                                <span class="elementor-price-list-title">
                                  New Set
                                </span>
                                <span class="elementor-price-list-separator">
                                </span>
                                <span class="elementor-price-list-price">
                                  $100
                                </span>
                              </div>
                              <p class="elementor-price-list-description">
                                60 -75 mins
                              </p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a class="elementor-price-list-item" href="#">
                            <div class="elementor-price-list-text">
                              <div class="elementor-price-list-header">
                                <span class="elementor-price-list-title">
                                  Refill
                                </span>
                                <span class="elementor-price-list-separator">
                                </span>
                                <span class="elementor-price-list-price">
                                  $60
                                </span>
                              </div>
                              <p class="elementor-price-list-description">
                                60 mins
                              </p>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="elementor-element elementor-element-6595dfb elementor-widget elementor-widget-spacer"
                  data-id="6595dfb" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                      <div class="elementor-spacer">
                        <div class="elementor-spacer-inner">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="elementor-element elementor-element-31ed8de elementor-widget elementor-widget-heading"
                  data-id="31ed8de" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                      <h3 class="elementor-heading-title elementor-size-default">
                        Classic Lash Extensions with Master Lucy
                      </h3>
                    </div>
                  </div>
                  <div class="elementor-element elementor-element-1f8f7cc elementor-widget elementor-widget-price-list"
                  data-id="1f8f7cc" data-element_type="widget" data-widget_type="price-list.default">
                    <div class="elementor-widget-container">
                      <ul class="elementor-price-list">
                        <li>
                          <a class="elementor-price-list-item" href="#">
                            <div class="elementor-price-list-text">
                              <div class="elementor-price-list-header">
                                <span class="elementor-price-list-title">
                                  New Set
                                </span>
                                <span class="elementor-price-list-separator">
                                </span>
                                <span class="elementor-price-list-price">
                                  $120
                                </span>
                              </div>
                              <p class="elementor-price-list-description">
                                60 -75 mins
                              </p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a class="elementor-price-list-item" href="#">
                            <div class="elementor-price-list-text">
                              <div class="elementor-price-list-header">
                                <span class="elementor-price-list-title">
                                  Refill
                                </span>
                                <span class="elementor-price-list-separator">
                                </span>
                                <span class="elementor-price-list-price">
                                  $70
                                </span>
                              </div>
                              <p class="elementor-price-list-description">
                                60 mins
                              </p>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-element elementor-element-ba33fe5 elementor-widget elementor-widget-spacer"
              data-id="ba33fe5" data-element_type="widget" data-widget_type="spacer.default">
                <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                    <div class="elementor-spacer-inner">
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-element elementor-element-b85f907 elementor-align-center elementor-widget__width-inherit elementor-widget elementor-widget-button"
              data-id="b85f907" data-element_type="widget" data-widget_type="button.default">
                <div class="elementor-widget-container">
                  <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" href="https://lucybeauty.ca/contact-us/">
                      <span class="elementor-button-content-wrapper">
                        <span class="elementor-button-text">
                          Book now
                        </span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>
    <div class="post-tags">
    </div>
  </div>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/frontend/pages/service/category.blade.php ENDPATH**/ ?>