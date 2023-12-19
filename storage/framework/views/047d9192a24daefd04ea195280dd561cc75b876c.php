<?php
$page_title = $taxonomy->title->$locale ?? '';
$image_background = $taxonomy->json_params->image_background ?? '';

$image = $taxonomy->image ?? null;
$seo_title = $taxonomy->meta_title ?? $page_title;
$seo_keyword = $taxonomy->meta_keyword ?? null;
$seo_description = $taxonomy->meta_description ?? null;
$seo_image = $image ?? null;

?>

<?php $__env->startSection('content'); ?>

<link rel='stylesheet' href=<?php echo e(asset('themes/frontend/lucy/new_js/post-127.css?ver=1702741318')); ?> media='all' />
<style>
  .elementor-127 .elementor-element.elementor-element-102872e7:not(.elementor-motion-effects-element-type-background){
    background-image: url(<?php echo e($taxonomy->json_params->image_background); ?>);
  }
</style>
 <style>
  /*! elementor - v3.15.0 - 02-08-2023 */ .elementor-widget-text-editor.elementor-drop-cap-view-stacked
  .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed
  .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default)
  .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default)
  .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor
  .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor
  .elementor-drop-cap-letter{display:inline-block}
</style>
<div data-elementor-type="wp-page" data-elementor-id="127" class="elementor elementor-127"
data-elementor-post-type="page">
  <section class="elementor-section elementor-top-section elementor-element elementor-element-102872e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
  data-id="102872e7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-background-overlay">
    </div>
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7267f875"
      data-id="7267f875" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-67d07d6e elementor-widget elementor-widget-heading"
          data-id="67d07d6e" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
              <style>
                /*! elementor - v3.15.0 - 02-08-2023 */ .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading
                .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading
                .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading
                .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading
                .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading
                .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading
                .elementor-heading-title.elementor-size-xxl{font-size:59px}
              </style>
              <h1 class="elementor-heading-title elementor-size-default">
                <?php echo e($taxonomy->title->$locale ?? ''); ?>

              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="elementor-element elementor-element-662179f e-flex e-con-boxed e-con"
  data-id="662179f" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
    <div class="e-con-inner">
      <div class="elementor-element elementor-element-ade2711 e-n-tabs-mobile elementor-widget elementor-widget-n-tabs"
      data-id="ade2711" data-element_type="widget" data-settings="{&quot;horizontal_scroll&quot;:&quot;disable&quot;}"
      data-widget_type="nested-tabs.default">
        <div class="elementor-widget-container">
          <div class="e-n-tabs">
            <div class="e-n-tabs-heading" role="tablist">

              <div id="lash-extensions" class="e-n-tab-title e-normal" aria-selected="true"
              data-tab="1" role="tab" tabindex="0" aria-controls="e-n-tab-content-1821"
              aria-expanded="false">
                <span class="e-n-tab-icon">
                </span>
                <span class="e-n-tab-title-text">
                  Lash Extensions
                </span>
              </div>

              <div id="semi-permanent-brows" class="e-n-tab-title e-normal" aria-selected="false"
              data-tab="2" role="tab" tabindex="-1" aria-controls="e-n-tab-content-1822"
              aria-expanded="false">
                <span class="e-n-tab-icon">
                </span>
                <span class="e-n-tab-title-text">
                  Semi Permanent Brows
                </span>
              </div>

            </div>

            <div class="e-n-tabs-content" role="tablist" aria-orientation="vertical">

              <div class="e-n-tab-title e-collapse" aria-selected="true" data-tab="1"
              role="tab" tabindex="0" aria-controls="e-n-tab-content-1821" aria-expanded="false"
              id="lash-extensions-accordion">
                <span class="e-n-tab-icon">
                </span>
                <span class="e-n-tab-title-text">
                  Lash Extensions
                </span>
              </div>
              <div class="elementor-element elementor-element-9f79a8e e-con-full e-flex e-con"
              data-id="9f79a8e" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}">

                

                <div class="elementor-element elementor-element-e2b106a e-con-full e-flex e-con"
                data-id="e2b106a" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">

                  

                  <div class="elementor-element elementor-element-abdfea0 e-con-full e-flex e-con"
                  data-id="abdfea0" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                    <div class="elementor-element elementor-element-94ea35b e-con-full e-flex e-con"
                    data-id="94ea35b" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                      <div class="elementor-element elementor-element-fcf1c38 e-con-full e-flex e-con"
                      data-id="fcf1c38" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                        <div class="elementor-element elementor-element-99f087e elementor-widget elementor-widget-image"
                        data-id="99f087e" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <img decoding="async" width="449" height="449" src="https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1.jpg"
                            class="attachment-large size-large wp-image-537" alt="" srcset="https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1.jpg 449w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1-300x300.jpg 300w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1-100x100.jpg 100w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1-150x150.jpg 150w"
                            sizes="(max-width: 449px) 100vw, 449px" />
                          </div>
                        </div>
                      </div>
                      <div class="elementor-element elementor-element-1ec750f e-con-full e-flex e-con"
                      data-id="1ec750f" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                        <div class="elementor-element elementor-element-cd573d3 e-flex e-con-boxed e-con"
                        data-id="cd573d3" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                          <div class="e-con-inner">
                            <div class="elementor-element elementor-element-243aff4 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                            data-id="243aff4" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                  Classic lash extensions
                                </h2>
                              </div>
                            </div>
                            <div class="elementor-element elementor-element-8f7dac1 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                            data-id="8f7dac1" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                  From a $99
                                </h2>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-b1d15c1 elementor-widget elementor-widget-text-editor"
                        data-id="b1d15c1" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                            <p>
                              A single lash extension is applied to a single natural lash
                            </p>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-9ffc9b6 elementor-mobile-align-center elementor-widget elementor-widget-button"
                        data-id="9ffc9b6" data-element_type="widget" data-widget_type="button.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                              <a class="elementor-button elementor-button-link elementor-size-sm" href="https://lucybeauty.ca/contact-us/">
                                <span class="elementor-button-content-wrapper">
                                  <span class="elementor-button-text">
                                    Book Now
                                  </span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  

                  <div class="elementor-element elementor-element-abdfea0 e-con-full e-flex e-con"
                  data-id="abdfea0" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                    <div class="elementor-element elementor-element-94ea35b e-con-full e-flex e-con"
                    data-id="94ea35b" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                      <div class="elementor-element elementor-element-fcf1c38 e-con-full e-flex e-con"
                      data-id="fcf1c38" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                        <div class="elementor-element elementor-element-99f087e elementor-widget elementor-widget-image"
                        data-id="99f087e" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <img decoding="async" width="449" height="449" src="https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1.jpg"
                            class="attachment-large size-large wp-image-537" alt="" srcset="https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1.jpg 449w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1-300x300.jpg 300w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1-100x100.jpg 100w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1-150x150.jpg 150w"
                            sizes="(max-width: 449px) 100vw, 449px" />
                          </div>
                        </div>
                      </div>
                      <div class="elementor-element elementor-element-1ec750f e-con-full e-flex e-con"
                      data-id="1ec750f" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                        <div class="elementor-element elementor-element-cd573d3 e-flex e-con-boxed e-con"
                        data-id="cd573d3" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                          <div class="e-con-inner">
                            <div class="elementor-element elementor-element-243aff4 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                            data-id="243aff4" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                  Classic lash extensions
                                </h2>
                              </div>
                            </div>
                            <div class="elementor-element elementor-element-8f7dac1 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                            data-id="8f7dac1" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                  From a $99
                                </h2>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-b1d15c1 elementor-widget elementor-widget-text-editor"
                        data-id="b1d15c1" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                            <p>
                              A single lash extension is applied to a single natural lash
                            </p>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-9ffc9b6 elementor-mobile-align-center elementor-widget elementor-widget-button"
                        data-id="9ffc9b6" data-element_type="widget" data-widget_type="button.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                              <a class="elementor-button elementor-button-link elementor-size-sm" href="https://lucybeauty.ca/contact-us/">
                                <span class="elementor-button-content-wrapper">
                                  <span class="elementor-button-text">
                                    Book Now
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

              <div class="e-n-tab-title e-collapse" aria-selected="false" data-tab="2"
              role="tab" tabindex="-1" aria-controls="e-n-tab-content-1822" aria-expanded="false"
              id="semi-permanent-brows-accordion">
                <span class="e-n-tab-icon">
                </span>
                <span class="e-n-tab-title-text">
                  Semi Permanent Brows
                </span>
              </div>
              <div class="elementor-element elementor-element-71c83e0 e-con-full e-flex e-con"
              data-id="71c83e0" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-element elementor-element-e3ac021 e-con-full e-flex e-con"
                data-id="e3ac021" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                  <div class="elementor-element elementor-element-a09f7dc e-con-full e-flex e-con"
                  data-id="a09f7dc" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                    <div class="elementor-element elementor-element-223e90c e-con-full e-flex e-con"
                    data-id="223e90c" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                      <div class="elementor-element elementor-element-8e996e1 e-con-full e-flex e-con"
                      data-id="8e996e1" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                        <div class="elementor-element elementor-element-2ace630 elementor-widget elementor-widget-image"
                        data-id="2ace630" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <img decoding="async" width="449" height="449" src="https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1.jpg"
                            class="attachment-large size-large wp-image-537" alt="" srcset="https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1.jpg 449w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1-300x300.jpg 300w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1-100x100.jpg 100w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-1-150x150.jpg 150w"
                            sizes="(max-width: 449px) 100vw, 449px" />
                          </div>
                        </div>
                      </div>
                      <div class="elementor-element elementor-element-4deed7d e-con-full e-flex e-con"
                      data-id="4deed7d" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                        <div class="elementor-element elementor-element-874b09c e-flex e-con-boxed e-con"
                        data-id="874b09c" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                          <div class="e-con-inner">
                            <div class="elementor-element elementor-element-ced3c40 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                            data-id="ced3c40" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                  Nano Hair Strokes Brows
                                </h2>
                              </div>
                            </div>
                            <div class="elementor-element elementor-element-979eedb elementor-widget__width-initial elementor-widget elementor-widget-heading"
                            data-id="979eedb" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                  From a $550
                                </h2>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-182dee8 elementor-widget elementor-widget-text-editor"
                        data-id="182dee8" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                            <p>
                              Nano hair strokes brows are a cosmetic eyebrow tattoo that gives the brows
                              volume and definition by adding fine hair strokes between the natural hairs
                            </p>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-a4ee6e5 elementor-mobile-align-center elementor-widget elementor-widget-button"
                        data-id="a4ee6e5" data-element_type="widget" data-widget_type="button.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                              <a class="elementor-button elementor-button-link elementor-size-sm" href="https://lucybeauty.ca/contact-us/">
                                <span class="elementor-button-content-wrapper">
                                  <span class="elementor-button-text">
                                    Book Now
                                  </span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="elementor-element elementor-element-0358757 e-con-full e-flex e-con"
                  data-id="0358757" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                    <div class="elementor-element elementor-element-6cb53b9 e-con-full e-flex e-con"
                    data-id="6cb53b9" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                      <div class="elementor-element elementor-element-832247d e-con-full e-flex e-con"
                      data-id="832247d" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                        <div class="elementor-element elementor-element-067ce7d elementor-widget elementor-widget-image"
                        data-id="067ce7d" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <img decoding="async" width="449" height="449" src="https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-3.jpg"
                            class="attachment-large size-large wp-image-543" alt="" srcset="https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-3.jpg 449w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-3-300x300.jpg 300w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-3-100x100.jpg 100w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-3-150x150.jpg 150w"
                            sizes="(max-width: 449px) 100vw, 449px" />
                          </div>
                        </div>
                      </div>
                      <div class="elementor-element elementor-element-6bd785d e-con-full e-flex e-con"
                      data-id="6bd785d" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                        <div class="elementor-element elementor-element-e4be5f1 e-flex e-con-boxed e-con"
                        data-id="e4be5f1" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                          <div class="e-con-inner">
                            <div class="elementor-element elementor-element-d118eab elementor-widget__width-initial elementor-widget elementor-widget-heading"
                            data-id="d118eab" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                  Ombre Powder Brows
                                </h2>
                              </div>
                            </div>
                            <div class="elementor-element elementor-element-176d1c4 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                            data-id="176d1c4" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                  From a $500
                                </h2>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-54a1c32 elementor-widget elementor-widget-text-editor"
                        data-id="54a1c32" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                            <p>
                              An ombré powder brow is a semi-permanent eyebrow tattoo that dots pigment
                              into the skin to create the illusion of fuller, powder-filled brows
                            </p>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-a2fd07c elementor-mobile-align-center elementor-widget elementor-widget-button"
                        data-id="a2fd07c" data-element_type="widget" data-widget_type="button.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                              <a class="elementor-button elementor-button-link elementor-size-sm" href="https://lucybeauty.ca/contact-us/">
                                <span class="elementor-button-content-wrapper">
                                  <span class="elementor-button-text">
                                    Book Now
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
                <div class="elementor-element elementor-element-86f148e e-con-full e-flex e-con"
                data-id="86f148e" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                  <div class="elementor-element elementor-element-95a8bb6 e-con-full e-flex e-con"
                  data-id="95a8bb6" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                    <div class="elementor-element elementor-element-63c77ee e-con-full e-flex e-con"
                    data-id="63c77ee" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                      <div class="elementor-element elementor-element-a33558a e-con-full e-flex e-con"
                      data-id="a33558a" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                        <div class="elementor-element elementor-element-7d12497 elementor-widget elementor-widget-image"
                        data-id="7d12497" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <img loading="lazy" decoding="async" width="449" height="449" src="https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-4.jpg"
                            class="attachment-large size-large wp-image-550" alt="" srcset="https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-4.jpg 449w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-4-300x300.jpg 300w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-4-100x100.jpg 100w, https://lucybeauty.ca/wp-content/uploads/2023/06/IMG_0138-e1679119267317-10-4-150x150.jpg 150w"
                            sizes="(max-width: 449px) 100vw, 449px" />
                          </div>
                        </div>
                      </div>
                      <div class="elementor-element elementor-element-25bd29f e-con-full e-flex e-con"
                      data-id="25bd29f" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                        <div class="elementor-element elementor-element-ccfe852 e-flex e-con-boxed e-con"
                        data-id="ccfe852" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                          <div class="e-con-inner">
                            <div class="elementor-element elementor-element-5dee856 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                            data-id="5dee856" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                  Combination Brows
                                </h2>
                              </div>
                            </div>
                            <div class="elementor-element elementor-element-134a7b0 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                            data-id="134a7b0" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                  From a $550
                                </h2>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-765a767 elementor-widget elementor-widget-text-editor"
                        data-id="765a767" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                            <p>
                              A combination of two forms of semi-permanent techniques: nano hair strokes
                              and powder brows (shading)
                            </p>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-a23ad58 elementor-mobile-align-center elementor-widget elementor-widget-button"
                        data-id="a23ad58" data-element_type="widget" data-widget_type="button.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                              <a class="elementor-button elementor-button-link elementor-size-sm" href="https://lucybeauty.ca/contact-us/">
                                <span class="elementor-button-content-wrapper">
                                  <span class="elementor-button-text">
                                    Book Now
                                  </span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="elementor-element elementor-element-05616fa e-con-full e-flex e-con"
                  data-id="05616fa" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                    <div class="elementor-element elementor-element-97aca86 e-con-full e-flex e-con"
                    data-id="97aca86" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/frontend/pages/service/default.blade.php ENDPATH**/ ?>