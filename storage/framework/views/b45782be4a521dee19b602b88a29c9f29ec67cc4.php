<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

	<?php
	$page_title = 'Dịch vụ khám';
	$title = 'Dịch vụ khám';
	$image = '';
	$seo_title = $title;
	$seo_keyword = $title;
	$seo_description = 'Dịch vụ khám';
	$seo_image = $image ?? null;

	?>

	<title>Dịch vụ khám</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<meta http-equiv="Content-Language" content="vi" />
	<meta name="copyright" content="Copyright" />
	<meta name="description" content="<?php echo e($seo_description); ?>" />
	<meta name="keywords" content="<?php echo e($seo_keyword); ?>" />
	<meta name="DC.title" content="<?php echo e($seo_title); ?>" />
	<meta property="og:type" name="ogtype" content="Website" />
	<meta property="og:title" name="ogtitle" content="<?php echo e($seo_title); ?>" />
	<meta property="og:description" name="ogdescription" content="<?php echo e($seo_description); ?>" />
	<meta property="og:image" name="ogimage" content="<?php echo e($seo_image); ?>" />
	<meta property="og:sitename" content="<?php echo e(Request::fullUrl()); ?>" />
	<link rel="canonical" href="<?php echo e(Request::fullUrl()); ?>" />
	<link rel="shortcut icon" type="image/png" href="<?php echo e($web_information->image->favicon ?? ''); ?>" />
	
	<?php echo $__env->make('frontend.panels.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/phongkham/dichvu.css')); ?>" />

</head>
<body class="archive category category-dich-vu-kham category-2137 cbp-spmenu-push cbp-spmenu-widget-push">

	<?php echo $__env->make('frontend.element.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend.element.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<section class="container12 sec32">
	   <div class="wrap">
	      <div class="d_flex">
	         <div class="sec32_row0">
	            <p class="entry-breadcrumb yoast_breadcrumb">
	            	<span>
	            		<span>
	            			<a href="/">Trang chủ</a>
	            		</span> » 
	            		<span>
	            			<a href="/dich-vu">Dịch vụ khám</a>
	            		</span>
	            	</span>
	            </p>
	         </div>
            <div class="entry-title entry-title--archive">
               <h1 class="entry-title__h1"><span>Dịch vụ khám</span></h1>
            </div>
            <?php if(count($posts) > 0): ?>
	            <div class="entry-loop__dich-vu-y-te">
	            	<ul class="d_flex">
	            		<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>												
						<?php							
						$image = $item->json_params->image != '' ? $item->json_params->image : '/public/themes/frontend/phongkham/img/macdinh_tinbai_360_200.png';						
						?>
		            		<li class="d_flex">
		            			<div class="thumb">
		            				<a href="/dich-vu/<?php echo e($item->url_part); ?>.html">
		            					<img data-lazyloaded="1" src="<?php echo e($image); ?>" width="400" height="480" data-src="<?php echo e($image); ?>" alt="<?php echo e($item->title); ?>" data-ll-status="loaded" class="entered litespeed-loaded">
		            				</a>
		            			</div>
		            			<div class="text">
		            				<h2 class="text__title">
		            					<a href="/dich-vu/<?php echo e($item->url_part); ?>.html"><?php echo e($item->title); ?></a>
		            				</h2>
		            			</div>
		            		</li>
	            		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            	</ul>
	            </div>
            <?php endif; ?>
	      </div>
	   </div>
	</section>

	<?php echo $__env->make('frontend.element.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('frontend.panels.scrolltop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('frontend.panels.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH /home/ntdconyj0yk6/phongkham.nvoting.com/resources/views/frontend/pages/post/category_dichvu.blade.php ENDPATH**/ ?>