<?php
$params['status'] = 'active';
$params['news_position'] = '1';
$dichvu = App\Http\Services\ContentService::getCmsTaxonomy($params)->limit(6)->get();

?>
<?php if(count($dichvu) > 0): ?>
<div class="section-full bg-change-section overlay-wraper p-t80 p-b50">
	<div class="overlay-main bg-secondry opacity-09"></div>
	<div class="bg-changer">
		<div class="section-bg active" style="background-image:url(images/background/bg1.jpg)"></div>
	</div>
	<div class="container">
		<!-- TITLE START-->
		<div class="section-head text-center text-white">
			<h2 data-title="Services">Dịch vụ của chúng tôi</h2>
			<div class="mt-separator-outer">
				<div class="mt-separator site-bg-primary"></div>
			</div>                        
		</div>
		<!-- TITLE END-->
		<div class="section-content">                
			<div class="row d-flex justify-content-center">
				<?php $__currentLoopData = $dichvu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-4 col-md-6 m-b30">
					<div class="mt-icon-box-wraper center  p-a30 bgcall-block hover-shadow site-bg-white">
						<div class="mt-icon-box-sm radius bdr-2 bdr-solid bdr-primary m-b20">
							<span class="icon-cell  site-text-primary">
								<img decoding="async" src="<?php echo e($item->json_params->image); ?>" alt="" class="et-waypoint et_pb_animation_top et-animated">
							</span>
						</div>
						<div class="icon-content">
							<h4 class="mt-tilte  m-b15"><?php echo e($item->title); ?></h4>
							<p><?php echo e($item->content); ?></p>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<style>
.mt-icon-box-sm img {
	height: 100%!important;
}
</style>
<?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/element/service.blade.php ENDPATH**/ ?>