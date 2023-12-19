<?php 
  $array_category = array();
  foreach($taxonomy_all as $category){
    if($category->parent_id != ''){
      $array_category[$category->parent_id] = $category->parent_id;
    }
  } 
?>

<header id="pxl-header-elementor" class="is-sticky">
        <div class="pxl-header-elementor-main px-header--default">
          <div class="pxl-header-content">
            <div class="row">
              <div class="col-12">
                <div data-elementor-type="wp-post" data-elementor-id="2876" class="elementor elementor-2876">
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-0bd7ccc elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
                  data-id="0bd7ccc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default ">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-38d48c2 pxl-column-none"
                      data-id="38d48c2" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div class="elementor-element elementor-element-2374062 elementor-widget__width-auto pxl-flex-grow elementor-widget elementor-widget-pxl_icon"
                          data-id="2374062" data-element_type="widget" data-widget_type="pxl_icon.default">
                            <div class="elementor-widget-container">
                              <div class="pxl-icon-list pxl-icon1 style-default " data-wow-delay="ms">
                                <a class="elementor-repeater-item-923dd4c ps-top" href="#">
                                  English
                                </a>
                                <a class="elementor-repeater-item-5f8be11 ps-top" href="#">
                                  Vietnam
                                </a>
                                <a class="elementor-repeater-item-7e3ed51 ps-top" href="#">
                                  China
                                </a>
                                <a class="elementor-repeater-item-07a1746 ps-top" href="#">
                                  Spanish
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="elementor-element elementor-element-f0d597d elementor-widget__width-auto elementor-widget elementor-widget-pxl_link"
                          data-id="f0d597d" data-element_type="widget" data-widget_type="pxl_link.default">
                            <div class="elementor-widget-container">
                              <ul id="pxl-link-pxl_link-f0d597d-3726" class="pxl-link pxl-link-l1  style-default type-vertical"
                              data-wow-delay="ms">
                                <li>
                                  <a href="mailto:<?php echo e($web_information->information->email ?? ''); ?>" class="">
                                    <i aria-hidden="true" class="flaticon flaticon-email">
                                    </i>
                                    <span>
                                      <?php echo e($web_information->information->email ?? ''); ?>

                                    </span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="elementor-element elementor-element-59bf831 elementor-widget__width-auto elementor-widget elementor-widget-pxl_link"
                          data-id="59bf831" data-element_type="widget" data-widget_type="pxl_link.default">
                            <div class="elementor-widget-container">
                              <ul id="pxl-link-pxl_link-59bf831-6261" class="pxl-link pxl-link-l1  style-default type-vertical"
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
                          <div class="elementor-element elementor-element-5cd8ec2 elementor-widget__width-auto elementor-widget elementor-widget-pxl_button"
                          data-id="5cd8ec2" data-element_type="widget" data-widget_type="pxl_button.default">
                            <div class="elementor-widget-container">
                              <div id="pxl-pxl_button-5cd8ec2-4006" class="pxl-button " data-wow-delay="ms">
                                <a href="tel:<?php echo e($web_information->information->phone ?? ''); ?>" class="btn pxl-icon-active btn-nanuk  pxl-icon--left"
                                data-wow-delay="ms">
                                  <i aria-hidden="true" class="flaticon flaticon-chat">
                                  </i>
                                  <span class="pxl--btn-text " data-text="<?php echo e($web_information->information->phone ?? ''); ?>">
                                    <span>
                                      <?php echo e($web_information->information->phone ?? ''); ?>

                                    </span>
                                    
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-b7ab050 elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
                  data-id="b7ab050" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
                  style="width: 1519px; left: 0px;">
                    <div class="elementor-container elementor-column-gap-extended ">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c07f10b pxl-column-none"
                      data-id="c07f10b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div class="elementor-element elementor-element-682a003 elementor-widget__width-auto pxl-flex-grow elementor-widget elementor-widget-pxl_logo"
                          data-id="682a003" data-element_type="widget" data-widget_type="pxl_logo.default">
                            <div class="elementor-widget-container">
                              <div class="pxl-logo logo-box " data-wow-delay="ms">
                                <a href="/">
                                  <img width="330" height="138" src="<?php echo e($web_information->image->logo_header ?? ''); ?>" class="attachment-full"
                                  alt="">
                                </a>
                              </div>
                            </div>
                          </div>

                          <div class="elementor-element elementor-element-465ed2e elementor-widget__width-auto elementor-widget elementor-widget-pxl_menu"
                          data-id="465ed2e" data-element_type="widget" data-widget_type="pxl_menu.default">
                            <div class="elementor-widget-container">
                              <div class="pxl-nav-menu pxl-nav-menu1 pxl-mega-full-width fr-style-default show-effect-slideup sub-style-default">
                                <div class="menu-menu-1-container">
                                  <ul id="menu-menu-1" class="pxl-menu-primary clearfix">
                                    <li id="menu-item-1" class="menu-item menu-item-type-custom menu-item-object-custom pxl-megamenu menu-item-has-children menu-item-1">
                                      <a href="/">
                                        <span>
                                          <?php echo e($array_translate[strtolower('Home')]->$locale); ?>

                                        </span>
                                      </a>
                                    </li>
                                    <?php
                                    foreach($taxonomy_all as $taxonomy){
                                    $hienthi = trim($taxonomy->hienthi,';');
                                    $vitrihienthi = explode(';',$hienthi); // chuyển về mảng
                                    if(in_array('0',$vitrihienthi)){
                                      if(in_array($taxonomy->id,$array_category)){
                                     ?>
                                    <li id="menu-item-<?php echo e($taxonomy->id); ?>" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-<?php echo e($taxonomy->id); ?>">
                                      <a href="#">
                                        <span>
                                          <?php echo e($taxonomy->title->$locale); ?>

                                          <i class="caseicon-angle-arrow-down pxl-hide">
                                          </i>
                                        </span>
                                      </a>
                                      <ul class="sub-menu">
                                        <?php $i=0; foreach($taxonomy_all as $sub_taxonomy){ 
                                        if($sub_taxonomy->parent_id == $taxonomy->id){ $i++; ?>
                                        <li id="menu-item-<?php echo e($sub_taxonomy->id); ?>" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-<?php echo e($sub_taxonomy->id); ?>">
                                          <a href="/<?php echo e($sub_taxonomy->taxonomy.'/'.$sub_taxonomy->url_part.'.html'); ?>">
                                            <span>
                                              <?php echo e($sub_taxonomy->title->$locale); ?>

                                              <i class="caseicon-angle-arrow-down pxl-hide">
                                              </i>
                                            </span>
                                          </a>
                                        </li>
                                        <?php } } ?>
                                      </ul>
                                    </li>
                                  <?php }else{ ?>
                                    
                                    <li id="menu-item-<?php echo e($taxonomy->id); ?>" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-<?php echo e($taxonomy->id); ?>">
                                      <a href="/<?php echo e($taxonomy->taxonomy.'/'.$taxonomy->url_part.'.html'); ?>">
                                        <span>
                                          <?php echo e($taxonomy->title->$locale); ?>

                                        </span>
                                      </a>
                                    </li>
                                  <?php } } } ?>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="elementor-element elementor-element-0c3245d elementor-widget__width-auto elementor-widget elementor-widget-pxl_search"
                          data-id="0c3245d" data-element_type="widget" data-widget_type="pxl_search.default">
                            <div class="elementor-widget-container">
                              <form role="search" method="post" class="pxl-widget-searchform " data-wow-delay="ms"
                              action="<?php echo e(route('frontend.cms.news_search')); ?>">
                              <?php echo csrf_field(); ?>
                                <div class="searchform-wrap">
                                  <input type="text" placeholder="Search..." name="keyword" class="search-field">
                                  <button type="submit" class="search-submit">
                                    <i class="flaticon-search">
                                    </i>
                                  </button>
                                </div>
                              </form>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="pxl-header-elementor-sticky pxl-onepage-sticky pxl-sticky-stt">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div data-elementor-type="wp-post" data-elementor-id="77" class="elementor elementor-77">
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-b7ab050 elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default pxl-row-scroll-none pxl-section-overflow-visible pxl-bg-color-none pxl-section-overlay-none"
                  data-id="b7ab050" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
                  style="width: 1519px; left: -109.6px;">
                    <div class="elementor-container elementor-column-gap-extended ">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c07f10b pxl-column-none"
                      data-id="c07f10b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div class="elementor-element elementor-element-682a003 elementor-widget__width-auto pxl-flex-grow elementor-widget elementor-widget-pxl_logo"
                          data-id="682a003" data-element_type="widget" data-widget_type="pxl_logo.default">
                            <div class="elementor-widget-container">
                              <div class="pxl-logo logo-box " data-wow-delay="ms">
                                <a href="/">
                                  <img width="330" height="138" src="<?php echo e($web_information->image->logo_header ?? ''); ?>" class="attachment-full"
                                  alt="">
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="elementor-element elementor-element-3ae1009 elementor-widget__width-auto elementor-widget elementor-widget-pxl_menu"
                          data-id="3ae1009" data-element_type="widget" data-widget_type="pxl_menu.default">
                            <div class="elementor-widget-container">
                              <div class="pxl-nav-menu pxl-nav-menu1 pxl-mega-full-width fr-style-default show-effect-slideup sub-style-default">
                                <div class="menu-menu-1-container">
                                  <ul id="menu-menu-2" class="pxl-menu-primary clearfix">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom pxl-megamenu menu-item-has-children menu-item-49">
                                      <a href="/">
                                        <span>
                                          Home
                                          <i class="caseicon-angle-arrow-down pxl-hide">
                                          </i>
                                        </span>
                                      </a>
                                    </li>
                                    <?php
                                    foreach($taxonomy_all as $taxonomy){
                                    $hienthi = trim($taxonomy->hienthi,';');
                                    $vitrihienthi = explode(';',$hienthi); // chuyển về mảng
                                    if(in_array('0',$vitrihienthi)){
                                      if(in_array($taxonomy->id,$array_category)){
                                     ?>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-<?php echo e($taxonomy->id); ?>">
                                      <a href="#">
                                        <span>
                                          <?php echo e($taxonomy->title->$locale); ?>

                                          <i class="caseicon-angle-arrow-down pxl-hide">
                                          </i>
                                        </span>
                                      </a>
                                      <ul class="sub-menu">
                                        <?php  foreach($taxonomy_all as $sub_taxonomy){ 
                                        if($sub_taxonomy->parent_id == $taxonomy->id){ $i++; ?>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-<?php echo e($sub_taxonomy->id); ?>">
                                          <a href="/<?php echo e($sub_taxonomy->taxonomy.'/'.$sub_taxonomy->url_part.'.html'); ?>">
                                            <span>
                                              <?php echo e($sub_taxonomy->title->$locale); ?>

                                              <i class="caseicon-angle-arrow-down pxl-hide">
                                              </i>
                                            </span>
                                          </a>
                                        </li>
                                        <?php }} ?>
                                      </ul>

                                    </li>
                                    <?php }else{ ?>

                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-57">
                                      <a href="/<?php echo e($taxonomy->taxonomy.'/'.$taxonomy->url_part.'.html'); ?>">
                                        <span>
                                          <?php echo e($taxonomy->title->$locale); ?>

                                        </span>
                                      </a>
                                    </li>

                                    <?php } } } ?>
                                    
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="elementor-element elementor-element-0c3245d elementor-widget__width-auto elementor-widget elementor-widget-pxl_search"
                          data-id="0c3245d" data-element_type="widget" data-widget_type="pxl_search.default">
                            <div class="elementor-widget-container">
                              <form role="search" method="post" class="pxl-widget-searchform " data-wow-delay="ms"
                              action="<?php echo e(route('frontend.cms.news_search')); ?>">
                              <?php echo csrf_field(); ?>
                                <div class="searchform-wrap">
                                  <input type="text" placeholder="Search..." name="keyword" class="search-field">
                                  <button type="submit" class="search-submit">
                                    <i class="flaticon-search">
                                    </i>
                                  </button>
                                </div>
                              </form>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="pxl-header-mobile" class="style-inherit">
          <div id="pxl-header-main" class="pxl-header-main">
            <div class="container">
              <div class="row">
                <div class="pxl-header-branding">
                  <a href="/" title="<?php echo e($web_information->information->title ?? ''); ?>" rel="home">
                    <img src="<?php echo e($web_information->image->logo_header ?? ''); ?>" alt="<?php echo e($web_information->information->title ?? ''); ?>">
                  </a>
                </div>
                <div class="pxl-header-menu">
                  <div class="pxl-header-menu-scroll">
                    <div class="pxl-menu-close pxl-hide-xl pxl-close">
                    </div>
                    <div class="pxl-logo-mobile pxl-hide-xl">
                      <a href="/" title="<?php echo e($web_information->information->title ?? ''); ?>" rel="home">
                        <img src="<?php echo e($web_information->image->logo_header ?? ''); ?>" alt="<?php echo e($web_information->information->title ?? ''); ?>">
                      </a>
                    </div>
                    <div class="pxl-header-mobile-search pxl-hide-xl">
                      <form role="search" method="post"  action="<?php echo e(route('frontend.cms.news_search')); ?>">
                        <input type="text" placeholder="Search..." name="keyword" class="search-field">
                        <button type="submit" class="search-submit">
                          <i class="caseicon-search">
                          </i>
                        </button>
                      </form>
                    </div>
                    <nav class="pxl-header-nav">
                      <ul id="menu-menu-3" class="pxl-menu-primary clearfix">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom pxl-megamenu menu-item-has-children menu-item-49">
                          <a href="/">
                            <span>
                              Home
                            </span>
                          </a>
                        </li>
                        <?php
                        foreach($taxonomy_all as $taxonomy){
                        $hienthi = trim($taxonomy->hienthi,';');
                        $vitrihienthi = explode(';',$hienthi); // chuyển về mảng
                        if(in_array('0',$vitrihienthi)){
                          if(in_array($taxonomy->id,$array_category)){
                         ?>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-<?php echo e($taxonomy->id); ?>">
                          <a href="#">
                            <span>
                              <?php echo e($taxonomy->title->$locale); ?>

                            </span>
                          </a>
                          <ul class="sub-menu">
                            <?php  foreach($taxonomy_all as $sub_taxonomy){ 
                            if($sub_taxonomy->parent_id == $taxonomy->id){ $i++; ?>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1381">
                              <a href="/<?php echo e($sub_taxonomy->taxonomy.'/'.$sub_taxonomy->url_part.'.html'); ?>">
                                <span>
                                  About Us
                                </span>
                              </a>
                            </li>
                            <?php }} ?>
                          </ul>
                        </li>
                      <?php }else{ ?>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-<?php echo e($taxonomy->id); ?>">
                          <a href="/<?php echo e($taxonomy->taxonomy.'/'.$taxonomy->url_part.'.html'); ?>">
                            <span>
                              <?php echo e($taxonomy->title->$locale); ?>

                            </span>
                          </a>
                        </li>
                        <?php } } } ?>
                      </ul>
                    </nav>
                  </div>
                </div>
                <div class="pxl-header-menu-backdrop">
                </div>
              </div>
            </div>
            <div id="pxl-nav-mobile">
              <div class="pxl-nav-mobile-button">
                <span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div style="clear: both;"></div><?php /**PATH D:\xampp7\htdocs\duhoc\resources\views/frontend/element/header.blade.php ENDPATH**/ ?>