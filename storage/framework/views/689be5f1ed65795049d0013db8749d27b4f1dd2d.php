

<?php 
	$array_category = array();
	foreach($taxonomy_all as $category){
		if($category->parent_id != ''){
			$array_category[$category->parent_id] = $category->parent_id;
		}
	} 
$menu = '
<ul id="menu-main-menu" class="menu">
	<li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-7">
	  <a href="/">
	    Home
	  </a>
	  
	</li>';
	foreach($taxonomy_all as $taxonomy){
		$hienthi = trim($taxonomy->hienthi,';');
		$vitrihienthi = explode(';',$hienthi); // chuyển về mảng
		if(in_array('0',$vitrihienthi)){
			if(in_array($taxonomy->id,$array_category)){
				$menu .= '<li id="menu-item-'.$taxonomy->id.'" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-'.$taxonomy->id.'">
					  <a href="#">
					    '.$taxonomy->title.'
					    <i class="fa fa-angle-right" aria-hidden="true">
					    </i>
					  </a>
					  <ul class="sub-menu">';
					  $i=0;
                  	foreach($taxonomy_all as $sub_taxonomy){ 
					if($sub_taxonomy->parent_id == $taxonomy->id){ $i++;
					    $menu .= '<li id="menu-item-'.$sub_taxonomy->id.'" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-'.$sub_taxonomy->id.'">  <a href="/'.$sub_taxonomy->taxonomy.'/'.$sub_taxonomy->url_part.'.html">'.$sub_taxonomy->title.' <i class="fa fa-angle-right" aria-hidden="true">
					        </i>
					      </a>
					    </li>';
					}}
					  $menu .= '</ul>
					</li>';
				}else{
					$menu .= '<li id="menu-item-'.$taxonomy->id.'" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-'.$taxonomy->id.'">
				      <a href="/'.$taxonomy->taxonomy.'/'.$taxonomy->url_part.'.html">'.$taxonomy->title.'
				        <i class="fa fa-angle-right" aria-hidden="true">
				        </i>
				      </a>
				    </li>';
				}
			}
		}

$menu .= '</ul>';
?>


<header class="site-header tf-custom-header" role="banner">
        <div class="tf-container">
          <div class="tf-row">
            <div class="tf-col">
              <div data-elementor-type="wp-post" data-elementor-id="22" class="elementor elementor-22">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-594a554 elementor-section-full_width elementor-hidden-mobile elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
                data-id="594a554" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;tf_sticky&quot;:&quot;no&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6894275"
                    data-id="6894275" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2ee7aeb elementor-widget__width-auto ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                        data-id="2ee7aeb" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
                          <div class="elementor-widget-container">
                            <div class="ekit-wid-con">
                              <!-- link opening -->
                              <!-- end link opening -->
                              <div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation- media  ">
                                <div class="elementskit-box-header elementor-animation-">
                                  <div class="elementskit-info-box-icon  text-center">
                                    <i aria-hidden="true" class="elementkit-infobox-icon fas fa-envelope">
                                    </i>
                                  </div>
                                </div>
                                <div class="box-body">
                                  <h3 class="elementskit-info-box-title">
                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__">
                                      <?php echo e($web_information->information->email ?? ''); ?>

                                    </a>
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-8d1ee36 elementor-widget__width-auto elementor-widget-mobile__width-auto ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                        data-id="8d1ee36" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
                          <div class="elementor-widget-container">
                            <div class="ekit-wid-con">
                              <!-- link opening -->
                              <!-- end link opening -->
                              <div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation- media  ">
                                <div class="elementskit-box-header elementor-animation-">
                                  <div class="elementskit-info-box-icon  text-center">
                                    <i aria-hidden="true" class="elementkit-infobox-icon fas fa-phone">
                                    </i>
                                  </div>
                                </div>
                                <div class="box-body">
                                  <h3 class="elementskit-info-box-title">
                                    <?php echo e($web_information->information->phone ?? ''); ?>

                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-e070953"
                    data-id="e070953" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-81fd934 e-grid-align-right e-grid-align-mobile-center elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                        data-id="81fd934" data-element_type="widget" data-widget_type="social-icons.default">
                          <div class="elementor-widget-container">
                            <style>
                              /*! elementor - v3.17.0 - 25-10-2023 */ .elementor-widget-social-icons.elementor-grid-0
                              .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-mobile-0
                              .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-tablet-0
                              .elementor-widget-container{line-height:1;font-size:0}.elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0)
                              .elementor-grid{display:inline-grid}.elementor-widget-social-icons .elementor-grid{grid-column-gap:var(--grid-column-gap,5px);grid-row-gap:var(--grid-row-gap,5px);grid-template-columns:var(--grid-template-columns);justify-content:var(--justify-content,center);justify-items:var(--justify-content,center)}.elementor-icon.elementor-social-icon{font-size:var(--icon-size,25px);line-height:var(--icon-size,25px);width:calc(var(--icon-size,
                              25px) + (2 * var(--icon-padding, .5em)));height:calc(var(--icon-size, 25px)
                              + (2 * var(--icon-padding, .5em)))}.elementor-social-icon{--e-social-icon-icon-color:#fff;display:inline-flex;background-color:#69727d;align-items:center;justify-content:center;text-align:center;cursor:pointer}.elementor-social-icon
                              i{color:var(--e-social-icon-icon-color)}.elementor-social-icon svg{fill:var(--e-social-icon-icon-color)}.elementor-social-icon:last-child{margin:0}.elementor-social-icon:hover{opacity:.9;color:#fff}.elementor-social-icon-android{background-color:#a4c639}.elementor-social-icon-apple{background-color:#999}.elementor-social-icon-behance{background-color:#1769ff}.elementor-social-icon-bitbucket{background-color:#205081}.elementor-social-icon-codepen{background-color:#000}.elementor-social-icon-delicious{background-color:#39f}.elementor-social-icon-deviantart{background-color:#05cc47}.elementor-social-icon-digg{background-color:#005be2}.elementor-social-icon-dribbble{background-color:#ea4c89}.elementor-social-icon-elementor{background-color:#d30c5c}.elementor-social-icon-envelope{background-color:#ea4335}.elementor-social-icon-facebook,.elementor-social-icon-facebook-f{background-color:#3b5998}.elementor-social-icon-flickr{background-color:#0063dc}.elementor-social-icon-foursquare{background-color:#2d5be3}.elementor-social-icon-free-code-camp,.elementor-social-icon-freecodecamp{background-color:#006400}.elementor-social-icon-github{background-color:#333}.elementor-social-icon-gitlab{background-color:#e24329}.elementor-social-icon-globe{background-color:#69727d}.elementor-social-icon-google-plus,.elementor-social-icon-google-plus-g{background-color:#dd4b39}.elementor-social-icon-houzz{background-color:#7ac142}.elementor-social-icon-instagram{background-color:#262626}.elementor-social-icon-jsfiddle{background-color:#487aa2}.elementor-social-icon-link{background-color:#818a91}.elementor-social-icon-linkedin,.elementor-social-icon-linkedin-in{background-color:#0077b5}.elementor-social-icon-medium{background-color:#00ab6b}.elementor-social-icon-meetup{background-color:#ec1c40}.elementor-social-icon-mixcloud{background-color:#273a4b}.elementor-social-icon-odnoklassniki{background-color:#f4731c}.elementor-social-icon-pinterest{background-color:#bd081c}.elementor-social-icon-product-hunt{background-color:#da552f}.elementor-social-icon-reddit{background-color:#ff4500}.elementor-social-icon-rss{background-color:#f26522}.elementor-social-icon-shopping-cart{background-color:#4caf50}.elementor-social-icon-skype{background-color:#00aff0}.elementor-social-icon-slideshare{background-color:#0077b5}.elementor-social-icon-snapchat{background-color:#fffc00}.elementor-social-icon-soundcloud{background-color:#f80}.elementor-social-icon-spotify{background-color:#2ebd59}.elementor-social-icon-stack-overflow{background-color:#fe7a15}.elementor-social-icon-steam{background-color:#00adee}.elementor-social-icon-stumbleupon{background-color:#eb4924}.elementor-social-icon-telegram{background-color:#2ca5e0}.elementor-social-icon-thumb-tack{background-color:#1aa1d8}.elementor-social-icon-tripadvisor{background-color:#589442}.elementor-social-icon-tumblr{background-color:#35465c}.elementor-social-icon-twitch{background-color:#6441a5}.elementor-social-icon-twitter{background-color:#1da1f2}.elementor-social-icon-viber{background-color:#665cac}.elementor-social-icon-vimeo{background-color:#1ab7ea}.elementor-social-icon-vk{background-color:#45668e}.elementor-social-icon-weibo{background-color:#dd2430}.elementor-social-icon-weixin{background-color:#31a918}.elementor-social-icon-whatsapp{background-color:#25d366}.elementor-social-icon-wordpress{background-color:#21759b}.elementor-social-icon-xing{background-color:#026466}.elementor-social-icon-yelp{background-color:#af0606}.elementor-social-icon-youtube{background-color:#cd201f}.elementor-social-icon-500px{background-color:#0099e5}.elementor-shape-rounded
                              .elementor-icon.elementor-social-icon{border-radius:10%}.elementor-shape-circle
                              .elementor-icon.elementor-social-icon{border-radius:50%}
                            </style>
                            <div class="elementor-social-icons-wrapper elementor-grid">
                              <span class="elementor-grid-item">
                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-a3d3f7d"
                                target="_blank">
                                  <span class="elementor-screen-only">
                                    Twitter
                                  </span>
                                  <i class="fab fa-twitter">
                                  </i>
                                </a>
                              </span>
                              <span class="elementor-grid-item">
                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-ce8c00a"
                                target="_blank">
                                  <span class="elementor-screen-only">
                                    Facebook
                                  </span>
                                  <i class="fab fa-facebook">
                                  </i>
                                </a>
                              </span>
                              <span class="elementor-grid-item">
                                <a class="elementor-icon elementor-social-icon elementor-social-icon-pinterest-p elementor-repeater-item-923f2bf"
                                target="_blank">
                                  <span class="elementor-screen-only">
                                    Pinterest-p
                                  </span>
                                  <i class="fab fa-pinterest-p">
                                  </i>
                                </a>
                              </span>
                              <span class="elementor-grid-item">
                                <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-e6119e9"
                                target="_blank">
                                  <span class="elementor-screen-only">
                                    Instagram
                                  </span>
                                  <i class="fab fa-instagram">
                                  </i>
                                </a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4981591 elementor-hidden-tablet elementor-hidden-mobile"
                    data-id="4981591" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-dca5ade elementor-align-justify elementor-widget elementor-widget-button"
                        data-id="dca5ade" data-element_type="widget" data-widget_type="button.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                              <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
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
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-9452860 elementor-section-full_width elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no"
                data-id="9452860" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-0f698c9"
                    data-id="0f698c9" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-737679e elementor-widget elementor-widget-image"
                        data-id="737679e" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <style>
                              .elementor-widget-image{text-align:center}.elementor-widget-image
                              a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image
                              img{vertical-align:middle;display:inline-block}
                            </style>
                            <a href="/">
                              <img width="151" height="51" src="<?php echo e($web_information->image->logo_header ?? ''); ?>"
                              class="attachment-full size-full wp-image-72" alt="<?php echo e($web_information->information->title ?? ''); ?>" />
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-46ee3ba"
                    data-id="46ee3ba" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-462f216 elementor-widget-tablet__width-auto elementor-widget elementor-widget-tf-nav-menu"
                        data-id="462f216" data-element_type="widget" data-widget_type="tf-nav-menu.default">
                          <div class="elementor-widget-container">
                            <div class="tf-nav-menu tf-alignment-center horizontal menu-panel-style-left tf_link_effect_none tf_animation_line_ dropdown-style1 tf-nav-6560be3784392"
                            data-id_random="tf-nav-6560be3784392">
                              <div class="nav-panel mobile-menu-alignment-left">
                                <div class="wrap-logo-nav">
                                  <a href="/" class="logo-nav">
                                    <img src="<?php echo e($web_information->image->logo_header ?? ''); ?>"
                                    alt="<?php echo e($web_information->information->title ?? ''); ?>">
                                  </a>
                                </div>
                                <div class="mainnav-mobi">
                                  <div class="menu-container tf-menu-container">
                                    <?php echo $menu; ?>

                                  </div>
                                </div>
                                <div class="wrap-close-menu-panel-style-default">
                                  <button class="close-menu-panel-style-default">
                                    <i class="fas fa-times">
                                    </i>
                                  </button>
                                </div>
                              </div>
                              <div class="mainnav nav">
                                <div class="menu-container tf-menu-container">
                                  <?php echo $menu; ?>

                                </div>
                              </div>
                              <div class="mobile-menu-overlay">
                              </div>
                              <button class="tf-close">
                                <i class="fas fa-times">
                                </i>
                              </button>
                              <button class="btn-menu-mobile">
                                <span class="open-icon">
                                  <i class="fas fa-bars">
                                  </i>
                                </span>
                              </button>
                              <button class="btn-menu-only">
                                <span class="open-icon">
                                  <i class="fas fa-bars">
                                  </i>
                                </span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-bb72676 elementor-hidden-tablet elementor-hidden-mobile"
                    data-id="bb72676" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-b050135 elementor-widget__width-auto elementor-widget elementor-widget-tf-search"
                        data-id="b050135" data-element_type="widget" data-widget_type="tf-search.default">
                          <div class="elementor-widget-container">
                            <div class="tf-widget-search tf-alignment-left style-poppup">
                              <button class="tf-icon-search">
                                <i class="icon icon-search11">
                                </i>
                              </button>
                              <div class="tf-modal-search-panel">
                                <div class="search-panel">
                                  <form role="search" method="get" class="tf-search-form" action="#">
                                    <input type="search" class="search-field" placeholder="Search…" value=""
                                    name="s">
                                    <button type="submit" class="search-submit">
                                      <i aria-hidden="true" class="fas fa-search">
                                      </i>
                                    </button>
                                  </form>
                                </div>
                                <button class="tf-close-modal">
                                </button>
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
          </div>
        </div>
      </header>

<?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/element/header.blade.php ENDPATH**/ ?>