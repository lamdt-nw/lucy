<?php
$page_title = 'Tìm kiếm tin tức';
$title = 'Tìm kiếm tin tức';
$image = '';
$seo_title = $title;
$seo_keyword = 'Tìm kiếm tin tức';
$seo_description = 'Tìm kiếm tin tức';
$seo_image = $image ?? null;

?>

<?php $__env->startSection('content'); ?>
<div class="mt-bnr-inr overlay-wraper" style="background-image:url(/data/logo/banner.jpg);">
	<div class="overlay-main bg-black opacity-07"></div>
	<div class="container">
		<div class="mt-bnr-inr-entry">
			<h1 class="text-white"><?php echo e($title); ?></h1>
			
		</div>
	</div>
</div>

<div class="section-full p-t80 p-b50">
	<div class="container">
		
		<!-- Blog Post -->
		
		<!-- Block 1 -->
		<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php
		  $title = $item->title;
		  $brief = $item->brief;
		  $image = $item->image;
		  $date = date('H:i d/m/Y', strtotime($item->created_at));
		  // Viet ham xu ly lay alias bai viet
		  $alias_category = Str::slug($item->taxonomy_title);
		  $url_link = route('frontend.cms.post', ['alias_detail' => $item->url_part]) . '.html';
	   ?>
		<div class="blog-post blog-md date-style-2 clearfix bdr-1 bg-white">
			
			<div class="mt-post-media">
				<a href="javascript:void(0);"><img src="<?php echo e($image); ?>" alt=""></a>
			</div>
			<div class="mt-post-info p-m30 p-a30 overflow-hide">
				                  
				<div class="mt-post-title">
					<h3 class="post-title"><a href="javascript:void(0);"><?php echo e($title); ?></a></h3>
				</div>

				<div class="mt-post-text">
					<p><?php echo e($brief); ?></p> 
				</div>
				<div class="mt-post-readmore m-b0">
					<a href="<?php echo e($url_link); ?>" title="Xem thêm" rel="bookmark" class="site-button-link">Xem thêm</a>
				 </div>
			</div>
		
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<div class="pagination-nav">
			<?php echo e($posts->withQueryString()->links('frontend.pagination.default')); ?>

		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/pages/post/search.blade.php ENDPATH**/ ?>