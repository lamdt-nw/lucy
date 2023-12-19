<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($banner->block_code == 'banner'): ?>
<div class="elementor-element elementor-element-e1a642a elementor-widget-tablet__width-auto elementor-widget elementor-widget-pxl_banner_box"
data-id="e1a642a" data-element_type="widget" data-widget_type="pxl_banner_box.default">
<div class="elementor-widget-container">
  <div class="pxl-banner pxl-banner1">
	<div class="pxl-banner-inner">
	  <a class="pxl-item--link" href="<?php echo e($banner->url_link); ?>">
	  </a>
	  <div class="pxl-item--image">
		<div class="pxl-item-img-primary " data-wow-delay="ms">
		  <img decoding="async" class="pxl-image-banner " src="<?php echo e($banner->image); ?>"
		  width="522" height="609" alt="<?php echo e($banner->title->$locale); ?>" title="<?php echo e($banner->title->$locale); ?>">
		</div>
	  </div>
	</div>
  </div>
</div>
</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/vb2kcoqr09ph/chovay.nvoting.com/resources/views/frontend/element/banner.blade.php ENDPATH**/ ?>