
<style type="text/css">
	p span strong {
		font-size: 22px;
	}
</style>
<header id="header" class="header">

	<section class="container12 head2 d_pc">
		<div class="wrap">
			<div class="d_flex">
				<div class="head2__col1">
					<h1 class="head2__col1__h1">
						<a href="/">
							<img data-lazyloaded="1" width="300" src="<?php echo e($web_information->image->logo_header ?? ''); ?>" style="max-height: 80px;" data-src="<?php echo e($web_information->image->logo_header ?? ''); ?>" alt="<?php echo e($web_information->information->site_name ?? ''); ?>">
						</a>
					</h1>
				</div>
				
				<div class="head2__col2"><?php echo e($web_information->information->slogan ?? ''); ?></div>
				<div class="head2__col3">
					<form action="<?php echo e(route('frontend.cms.post_category_search')); ?>" method="get" class="d_flex">
						<input type="text" name="keyword" id="keyword" placeholder="Tìm kiếm" autocomplete="off" aria-label="Tìm kiếm">
						<button type="submit" value="Tìm kiếm">
							<i class="svg__fa">
								<img data-lazyloaded="1" width="16" height="16" src="/public/themes/frontend/phongkham/img/svg__fa-search.svg" data-src="/public/themes/frontend/phongkham/img/svg__fa-search.svg" alt="svg__fa-">
							</i>
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="container12 head3 d_pc">
		<div class="wrap">
			<div class="" role="navigation">
				<div class="main-menu-top"></div>
			</div>
		</div>
	</section>
</header>

<?php /**PATH /home/ntdconyj0yk6/phongkham.nvoting.com/resources/views/frontend/element/header.blade.php ENDPATH**/ ?>