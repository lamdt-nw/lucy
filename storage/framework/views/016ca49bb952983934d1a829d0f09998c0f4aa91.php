

<?php $__env->startSection('title'); ?>
  <?php echo e($module_name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo e($module_name); ?>

      <a class="btn btn-sm btn-warning pull-right" href="<?php echo e(route(Request::segment(2) . '.create')); ?>"><i
          class="fa fa-plus"></i>
        <?php echo app('translator')->get('add_new'); ?></a>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <?php if(session('successMessage')): ?>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo e(session('successMessage')); ?>

      </div>
    <?php endif; ?>

    <?php if(session('errorMessage')): ?>
      <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo e(session('errorMessage')); ?>

      </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
    <?php endif; ?>

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo app('translator')->get('update_form'); ?></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="<?php echo e(route(Request::segment(2) . '.update', $rows->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label><?php echo app('translator')->get('Mã ngôn ngữ'); ?> <small class="text-red">*</small></label>
              <input type="text" class="form-control" name="lang_code" value="<?php echo e($rows->lang_code); ?>" required>
            </div>
            <div class="form-group">
              <label><?php echo app('translator')->get('Tiêu đề ngôn ngữ'); ?> <small class="text-red">*</small></label>
              <input type="text" class="form-control" name="title" value="<?php echo e($rows->title); ?>" placeholder="Tiêu đề ngôn ngữ" required>
            </div>

            <div class="form-group">
              <label><?php echo app('translator')->get('status'); ?></label>
              <div class="form-control">
                <label>
                  <input type="radio" name="status" value="1" <?php echo e($rows->status == '1' ? 'checked' : ''); ?>>
                  <small><?php echo app('translator')->get('active'); ?></small>
                </label>
                <label>
                  <input type="radio" name="status" value="2" class="ml-15"
                    <?php echo e($rows->status == '2' ? 'checked' : ''); ?>>
                  <small><?php echo app('translator')->get('deactive'); ?></small>
                </label>
              </div>
            </div>

          </div>
          <div class="col-md-6">

            <div class="form-group">
              <label><?php echo app('translator')->get('Ngôn ngữ mặc định'); ?></label>
              <div class="form-control">
                <label>
                  <input type="radio" name="is_default" value="1" <?php echo e($rows->is_default == '1' ? 'checked' : ''); ?>>
                  <small><?php echo app('translator')->get('Có'); ?></small>
                </label>
                <label>
                  <input type="radio" name="is_default" value="2" class="ml-15" <?php echo e($rows->is_default == '2' ? 'checked' : ''); ?>>
                  <small><?php echo app('translator')->get('Không'); ?></small>
                </label>
              </div>
            </div>
			<div class="form-group">
			  <label>Ảnh</label>
			  <div class="input-group">
				<span class="input-group-btn">
				  <a data-input="image" onclick="openPopupImg('image')" data-preview="image-holder" class="btn btn-primary lfm"
					data-type="cms-image">
					<i class="fa fa-picture-o"></i> <?php echo app('translator')->get('choose'); ?>
				  </a>
				</span>
				<input id="image" class="form-control" type="text" name="image" value="<?php echo e($rows->image); ?>"
				  placeholder="<?php echo app('translator')->get('image_link'); ?>...">
			  </div>
			  <div id="image-holder" style="margin-top:15px;max-height:100px;">
				<?php if($rows->image != ''): ?>
				<img id="view_avatar" style="height: 5rem;" src="<?php echo e($rows->image); ?>">
				<?php else: ?>
				<img id="view_avatar" style="height: 5rem;" src="">
				<?php endif; ?>
			  </div>
			</div>
          </div>

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <a class="btn btn-sm btn-success" href="<?php echo e(route(Request::segment(2) . '.index')); ?>">
            <i class="fa fa-bars"></i> <?php echo app('translator')->get('list'); ?>
          </a>
          <button type="submit" class="btn btn-primary btn-sm pull-right"><i class="fa fa-floppy-o"></i>
            <?php echo app('translator')->get('save'); ?></button>
        </div>
      </form>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vb2kcoqr09ph/chovay.nvoting.com/resources/views/admin/pages/cms_language/edit.blade.php ENDPATH**/ ?>