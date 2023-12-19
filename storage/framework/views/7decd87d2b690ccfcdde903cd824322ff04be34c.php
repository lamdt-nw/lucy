<style>/*! elementor-pro - v3.14.0 - 26-06-2023 */
.elementor-slides .swiper-slide-bg{background-size:cover;background-position:50%;background-repeat:no-repeat;min-width:100%;min-height:100%}.elementor-slides .swiper-slide-inner{background-repeat:no-repeat;background-position:50%;position:absolute;top:0;left:0;bottom:0;right:0;padding:50px;margin:auto}.elementor-slides .swiper-slide-inner,.elementor-slides .swiper-slide-inner:hover{color:#fff;display:flex}.elementor-slides .swiper-slide-inner .elementor-background-overlay{position:absolute;z-index:0;top:0;bottom:0;left:0;right:0}.elementor-slides .swiper-slide-inner .elementor-slide-content{position:relative;z-index:1;width:100%}.elementor-slides .swiper-slide-inner .elementor-slide-heading{font-size:35px;font-weight:700;line-height:1}.elementor-slides .swiper-slide-inner .elementor-slide-description{font-size:17px;line-height:1.4}.elementor-slides .swiper-slide-inner .elementor-slide-description:not(:last-child),.elementor-slides .swiper-slide-inner .elementor-slide-heading:not(:last-child){margin-bottom:30px}.elementor-slides .swiper-slide-inner .elementor-slide-button{border:2px solid #fff;color:#fff;background:transparent;display:inline-block}.elementor-slides .swiper-slide-inner .elementor-slide-button,.elementor-slides .swiper-slide-inner .elementor-slide-button:hover{background:transparent;color:inherit;text-decoration:none}.elementor--v-position-top .swiper-slide-inner{align-items:flex-start}.elementor--v-position-bottom .swiper-slide-inner{align-items:flex-end}.elementor--v-position-middle .swiper-slide-inner{align-items:center}.elementor--h-position-left .swiper-slide-inner{justify-content:flex-start}.elementor--h-position-right .swiper-slide-inner{justify-content:flex-end}.elementor--h-position-center .swiper-slide-inner{justify-content:center}body.rtl .elementor-widget-slides .elementor-swiper-button-next{left:10px;right:auto}body.rtl .elementor-widget-slides .elementor-swiper-button-prev{right:10px;left:auto}.elementor-slides-wrapper div:not(.swiper-slide)>.swiper-slide-inner{display:none}@media (max-width:767px){.elementor-slides .swiper-slide-inner{padding:30px}.elementor-slides .swiper-slide-inner .elementor-slide-heading{font-size:23px;line-height:1;margin-bottom:15px}.elementor-slides .swiper-slide-inner .elementor-slide-description{font-size:13px;line-height:1.4;margin-bottom:15px}}
</style>
<div class="elementor-element elementor-element-1dd4ad0 e-con-full elementor-hidden-mobile e-flex e-con" data-id="1dd4ad0" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
    <div class="elementor-element elementor-element-bef0fb3 elementor--h-position-right elementor--v-position-middle elementor-pagination-position-inside elementor-widget elementor-widget-slides" data-id="bef0fb3" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;dots&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}" data-widget_type="slides.default">
        <div class="elementor-widget-container">
            <div class="elementor-swiper">
                <div class="elementor-slides-wrapper elementor-main-swiper swiper" dir="ltr" data-animation="fadeInUp">
                    <div class="swiper-wrapper elementor-slides">
                        <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($banner->block_code == 'slide'): ?>
                                <style>
                                    .elementor-168 .elementor-element.elementor-element-bef0fb3 .elementor-repeater-item-<?php echo e($banner->id); ?> .swiper-slide-bg {
                                        background-image: url(<?php echo e($banner->image_background); ?>);
                                    }
                                </style>
                                <div class="elementor-repeater-item-<?php echo e($banner->id); ?> swiper-slide">
                                    <div class="swiper-slide-bg" role="img"></div>
                                    <a class="swiper-slide-inner" href="<?php echo e($banner->url_link); ?>">
                                        <div class="swiper-slide-contents">
                                            <div class="elementor-slide-heading"><?php echo e($banner->title->$locale); ?></div>
                                            <div class="elementor-slide-description"><?php echo e($banner->brief->$locale); ?></div>
                                            <div class="elementor-button elementor-slide-button elementor-size-sm"><?php echo e($banner->url_link_title->$locale); ?></div>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>       
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="elementor-element elementor-element-a82fb35 e-con-full e-flex e-con" data-id="a82fb35" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
    <div class="elementor-element elementor-element-6d2f525 elementor--v-position-bottom elementor-hidden-desktop elementor-hidden-tablet elementor--h-position-center elementor-pagination-position-inside elementor-widget elementor-widget-slides" data-id="6d2f525" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;dots&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}" data-widget_type="slides.default">
        <div class="elementor-widget-container">
            <div class="elementor-swiper">
                <div class="elementor-slides-wrapper elementor-main-swiper swiper" dir="ltr" data-animation="fadeInUp">
                    <div class="swiper-wrapper elementor-slides">
                        <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($banner->block_code == 'slide'): ?>
                                <style>
                                    .elementor-168 .elementor-element.elementor-element-6d2f525 .elementor-repeater-item-<?php echo e($banner->id); ?> .swiper-slide-bg{
                                        background-size: cover;
                                        background-image: url(<?php echo e($banner->image_background); ?>);
                                    }
                                </style>
                                <div class="elementor-repeater-item-<?php echo e($banner->id); ?> swiper-slide">
                                    <div class="swiper-slide-bg" role="img"></div>
                                    <div class="elementor-background-overlay"></div>
                                    <a class="swiper-slide-inner" href="<?php echo e($banner->url_link); ?>">
                                        <div class="swiper-slide-contents">
                                            <div class="elementor-slide-heading"><?php echo e($banner->title->$locale); ?></div>
                                            <div class="elementor-slide-description"><?php echo e($banner->brief->$locale); ?></div>
                                            <div  class="elementor-button elementor-slide-button elementor-size-sm"><?php echo e($banner->url_link_title->$locale); ?></div>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/frontend/element/slide.blade.php ENDPATH**/ ?>