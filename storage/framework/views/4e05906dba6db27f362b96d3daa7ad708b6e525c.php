<?php
  
  $params['status'] = 'active';
  $params['news_position'] = '1';
  $items = App\Http\Services\ContentService::getCmsPost($params)->limit(3)
  ->get();

?>

<?php if(count($items) >0): ?>{

   <section class="elementor-section elementor-top-section elementor-element elementor-element-6e6b5f9 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
        data-id="6e6b5f9" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-61d56a1"
        data-id="61d56a1" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-244d7a5 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
            data-id="244d7a5" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
            data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h6 class="elementor-heading-title elementor-size-default">
                  Blog Posts
                </h6>
              </div>
            </div>
            <div class="elementor-element elementor-element-97836fa animated-slow elementor-invisible elementor-widget elementor-widget-heading"
            data-id="97836fa" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:80}"
            data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">
                  Latest News & Articles
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

	<section class="elementor-section elementor-top-section elementor-element elementor-element-148330d elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
        data-id="148330d" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
          <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-47c5497"
            data-id="47c5497" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-3299dac animated-slow elementor-invisible elementor-widget elementor-widget-tfposts"
                data-id="3299dac" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:160}"
                data-widget_type="tfposts.default">
                  <div class="elementor-widget-container">
                    <div id="tf-posts-3299dac" class="tf-posts-3299dac tf-posts-wrap column-3 tablet-column-3 mobile-column-1  no-arrow no-bullets grid-styles-default featured-post-top  "
                    data-tabid="3299dac" data-class_id="tf-posts-3299dac" data-loop="" data-auto=""
                    data-column="" data-column2="" data-column3="" data-spacer="" data-prev_icon=""
                    data-next_icon="">
                      <div class="tf-posts  grid">
                        
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="column">
                          <div class="entry blog-post">
                            <div class="featured-post">
                              <img decoding="async" src="<?php echo e($item->image); ?>"
                              alt="image">
                              <a href="https://themesflat.co/kitmellis/best-place-of-truesplander/"
                              class="overlay">
                                <i class="fas fa-plus" aria-hidden="true">
                                </i>
                              </a>
                            </div>
                            <div class="content">
                              
                              <h2 class="title">
                                <a href="/detail/<?php echo e($item->url_part); ?>.html"
                                title="Best place of true splander">
                                  <?php echo e($item->title); ?>

                                </a>
                              </h2>
                              <div class="content-post">
                                <?php echo e($item->brief); ?>

                              </div>
                              <div class="tf-button-container ">
                                <a href="/detail/<?php echo e($item->url_part); ?>.html"
                                class="tf-button bt_icon_after">
                                  Read More
                                  <i class="icon icon-right-arrow" aria-hidden="true">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<?php endif; ?>            
<?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/element/tinnoibat.blade.php ENDPATH**/ ?>