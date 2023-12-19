
<!-- Our Team  -->
<div class="section-full text-center mt-our-team p-t80 p-b50">
	<div class="container">
		<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php if($banner->block_code == 'linhvuc' and $banner->parent_id == ''): ?>
		<!-- TITLE START-->
		<div class="section-head text-center">
			<h2 data-title="Lĩnh Vực"><?php echo e($banner->title); ?></h2>
			<div class="mt-separator-outer">
				<div class="mt-separator site-bg-primary"></div>
			</div>                        
		</div>
		<!-- TITLE END-->
		<?php break; ?>
		<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<div class="section-content">
			<div class="row">
			
				<!-- Block 1 -->
				<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($banner->block_code == 'linhvuc' and $banner->parent_id != ''): ?>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
					<div class="animate-top">
						<div class="mt-team-media">
							<a href="javascript:void(0);"><img src="<?php echo e($banner->image); ?>" class="" alt=""></a>
						</div>
						<div class="mt-team-info text-center p-a20 text-white">
							<div class="mt-team-info-inner">
								<h4 class="mt-team-title m-b15">
									<a href="javascript:void(0);" class="text-white"><?php echo e($banner->title); ?></a>
								</h4>
							</div>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			</div>
		</div>
	
	</div>
</div>
  <?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/element/linhvuc.blade.php ENDPATH**/ ?>