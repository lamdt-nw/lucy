<?php 
  $array_category = array();
  foreach($taxonomy_all as $category){
    if($category->parent_id != ''){
      $array_category[$category->parent_id] = $category->parent_id;
    }
  }
?>

<link rel='stylesheet' href=<?php echo e(asset('themes/frontend/lucy/new_js/pxl-style.min.css?ver=1.0.0')); ?> media='all' />
<link rel='stylesheet' href=<?php echo e(asset('themes/frontend/lucy/new_js/pxl-grid.min.css?ver=1.0.0')); ?>  media='all' />
<link rel='stylesheet' href=<?php echo e(asset('themes/frontend/lucy/new_js/post-32.css?ver=1700767758')); ?> media='all' />
<style>
  .elementor-section.elementor-section-boxed > .elementor-container.new {
    max-width: 1290px;
  }
</style>

<div data-elementor-type="header" data-elementor-id="186" class="elementor elementor-186 elementor-location-header elementor-32" data-elementor-post-type="elementor_library" id="pxl-header-elementor">

  <section class="elementor-section elementor-top-section elementor-element elementor-element-0bd7ccc elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none elementor-hidden-mobile"
  data-id="0bd7ccc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container new elementor-column-gap-default ">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-38d48c2 pxl-column-none"
      data-id="38d48c2" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-2374062 elementor-widget__width-auto pxl-flex-grow elementor-widget elementor-widget-pxl_icon"
          data-id="2374062" data-element_type="widget" data-widget_type="pxl_icon.default">
            <div class="elementor-widget-container">
              <div class="pxl-icon-list pxl-icon1 style-default " data-wow-delay="ms">
                <a class="elementor-repeater-item-923dd4c ps-top" href="<?php echo e($web_information->social->facebook ?? ''); ?>" target="_blank">
                  <i aria-hidden="true" class="fab fa-facebook-f">
                  </i>
                </a>
                <a class="elementor-repeater-item-5f8be11 ps-top" href="<?php echo e($web_information->social->instagram ?? ''); ?>" target="_blank">
                  <i aria-hidden="true" class="fab fa-instagram">
                  </i>
                </a>
                <a class="elementor-repeater-item-7e3ed51 ps-top" href="<?php echo e($web_information->social->tiktok ?? ''); ?>" target="_blank">
                  <i aria-hidden="true" class="fab fa-tiktok"></i>
                  </i>
                </a>
              </div>
            </div>
          </div>
          <div class="elementor-element elementor-element-f0d597d elementor-widget__width-auto elementor-widget elementor-widget-pxl_link"
          data-id="f0d597d" data-element_type="widget" data-widget_type="pxl_link.default">
            <div class="elementor-widget-container">
              <ul id="pxl-link-pxl_link-f0d597d-2464" class="pxl-link pxl-link-l1  style-default type-vertical"
              data-wow-delay="ms">
                <li>
                  <a href="mailto:<?php echo e($web_information->information->email ?? ''); ?>" class="">
                    <i aria-hidden="true" class="fas fa-envelope">
                    </i>
                    <span>
                      <?php echo e($web_information->information->email ?? ''); ?>

                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="elementor-element elementor-element-f0d597d elementor-widget__width-auto elementor-widget elementor-widget-pxl_link"
          data-id="f0d597d" data-element_type="widget" data-widget_type="pxl_link.default">
            <div class="elementor-widget-container">
              <ul id="pxl-link-pxl_link-f0d597d-2464" class="pxl-link pxl-link-l1  style-default type-vertical"
              data-wow-delay="ms">
                <li>
                  <a href="#" class="">
                    <i aria-hidden="true" class="fas fa-map-marker-alt">
                    </i>
                    <span>
                      <?php echo e($web_information->information->address ?? ''); ?>

                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="elementor-element elementor-element-59bf831 elementor-widget__width-auto elementor-widget elementor-widget-pxl_link"
          data-id="59bf831" data-element_type="widget" data-widget_type="pxl_link.default">
            <div class="elementor-widget-container">
              <ul id="pxl-link-pxl_link-59bf831-8282" class="pxl-link pxl-link-l1  style-default type-vertical"
              data-wow-delay="ms">
                <li>
                  <a href="tel:<?php echo e($web_information->information->hotline ?? ''); ?>" class="">
                    <i aria-hidden="true" class="fas fa-phone-alt">
                    </i>
                    <span>
                      <?php echo e($web_information->information->hotline ?? ''); ?>

                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="elementor-section elementor-top-section elementor-element elementor-element-7b2c03ee elementor-section-boxed elementor-section-height-default elementor-section-height-default"
  data-id="7b2c03ee" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-41e02a9a"
      data-id="41e02a9a" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-1c7ea3e7 elementor-widget elementor-widget-image"
          data-id="1c7ea3e7" data-element_type="widget" data-widget_type="image.default">
            <div class="elementor-widget-container">
              <style>
                .elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image
                a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}
              </style>
              <a href="/">
                <img width="800" height="473" src="<?php echo e($web_information->image->logo_header ?? ''); ?>" alt="" srcset="<?php echo e($web_information->image->logo_header ?? ''); ?>"
              sizes="(max-width: 800px) 100vw, 800px" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-47b6a188"
      data-id="47b6a188" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-32e3a5d1 hfe-nav-menu__align-right hfe-submenu-icon-arrow hfe-submenu-animation-none hfe-link-redirect-child hfe-nav-menu__breakpoint-tablet elementor-widget elementor-widget-navigation-menu"
          data-id="32e3a5d1" data-element_type="widget" data-settings="{&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:22,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;15&quot;,&quot;right&quot;:&quot;15&quot;,&quot;bottom&quot;:&quot;15&quot;,&quot;left&quot;:&quot;15&quot;,&quot;isLinked&quot;:true},&quot;padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;13&quot;,&quot;right&quot;:&quot;30&quot;,&quot;bottom&quot;:&quot;13&quot;,&quot;left&quot;:&quot;30&quot;,&quot;isLinked&quot;:false},&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;width_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;220&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
          data-widget_type="navigation-menu.default">
            <div class="elementor-widget-container">
              <div class="hfe-nav-menu hfe-layout-horizontal hfe-nav-menu-layout horizontal hfe-pointer__none"
              data-layout="horizontal" data-last-item="cta">
                <div role="button" class="hfe-nav-menu__toggle elementor-clickable">
                  <span class="screen-reader-text">
                    Menu
                  </span>
                  <div class="hfe-nav-menu-icon">
                    <i aria-hidden="true" class="fas fa-align-justify">
                    </i>
                  </div>
                </div>
                <nav class="hfe-nav-menu__layout-horizontal hfe-nav-menu__submenu-arrow"
                data-toggle-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;fas fa-align-justify&quot;&gt;&lt;/i&gt;"
                data-close-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;far fa-window-close&quot;&gt;&lt;/i&gt;"
                data-full-width="yes">
                  <ul id="menu-1-32e3a5d1" class="hfe-nav-menu">
                    <li id="menu-item-169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-168 current_page_item parent hfe-creative-menu current-menu-item">
                      <a href="/" class="hfe-menu-item">
                        <?php echo e($array_translate[strtolower('Home')]->$locale); ?>

                      </a>
                    </li>
                    <?php
                    foreach($taxonomy_all as $taxonomy){
                    $hienthi = trim($taxonomy->hienthi,';');
                    $vitrihienthi = explode(';',$hienthi); // chuyển về mảng
                    if(in_array('0',$vitrihienthi)){
                      if(in_array($taxonomy->id,$array_category)){
                    ?>
                        <li id="menu-item-<?php echo e($taxonomy->id); ?>" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu menu-item-has-children hfe-has-submenu">
                            <div class="hfe-has-submenu-container">
                                <a href="/<?php echo e($taxonomy->taxonomy.'/'.$taxonomy->url_part.'.html'); ?>" class="hfe-menu-item">
                                    <?php echo e($taxonomy->title->$locale); ?>

                                    <span class='hfe-menu-toggle sub-arrow hfe-menu-child-0'>
                                        <i class='fa'></i>
                                    </span>
                                </a>
                            </div>
                            <ul class="sub-menu">
                                <?php $i=0; foreach($taxonomy_all as $sub_taxonomy){ 
                                if($sub_taxonomy->parent_id == $taxonomy->id){ $i++; ?>
                                <li id="menu-item-1127" class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                    <a href="/<?php echo e($sub_taxonomy->taxonomy.'/'.$sub_taxonomy->url_part.'.html'); ?>" class="hfe-sub-menu-item">
                                    <?php echo e($sub_taxonomy->title->$locale); ?>

                                    </a>
                                </li>
                                <?php } } ?>
                            </ul>
                        </li>

                    <?php }else{ ?>

                        <li id="menu-item-<?php echo e($taxonomy->id); ?>" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                          <a href="/<?php echo e($taxonomy->taxonomy.'/'.$taxonomy->url_part.'.html'); ?>" class="hfe-menu-item">
                            <?php echo e($taxonomy->title->$locale); ?>

                          </a>
                        </li>

                    <?php } } } ?>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                          <a href="<?php echo e($web_information->information->url_booking ?? ''); ?>" class="hfe-menu-item">
                            <?php echo e($array_translate[strtolower('Booking now')]->$locale); ?>

                          </a>
                        </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/frontend/element/header.blade.php ENDPATH**/ ?>