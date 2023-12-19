

<?php $__env->startSection('title'); ?>
  <?php echo e($module_name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo e($module_name); ?>

      <a class="btn btn-sm btn-warning pull-right" href="<?php echo e(route(Request::segment(2) . '.create')); ?>"><i
          class="fa fa-plus"></i>
        <?php echo app('translator')->get('add_new'); ?></a>
    </h1>
  </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <!-- Main content -->
  <section class="content">
    <div class="box">
      <form action="<?php echo e(route(Request::segment(2) . '.index')); ?>" method="GET">
        <div class="box-header">
          <h3 class="box-title"><?php echo app('translator')->get('list'); ?></h3>

          <div class="box-tools">
            <div class="input-group input-group-sm">
              <input type="text" name="keyword" class="form-control pull-right" placeholder="Tìm theo tên nhãn..."
                value="<?php echo e($keyword); ?>">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default" data-toggle="tooltip" title="<?php echo app('translator')->get('search'); ?>">
                  <i class="fa fa-search"></i>
                </button>
                <a class="btn btn-primary" href="<?php echo e(route(Request::segment(2) . '.index')); ?>" data-toggle="tooltip"
                  title="<?php echo app('translator')->get('refresh'); ?>">
                  <i class="fa fa-refresh"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </form>

      <div class="box-body table-responsive">
        <?php if(session('errorMessage')): ?>
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo e(session('errorMessage')); ?>

          </div>
        <?php endif; ?>
        <?php if(session('successMessage')): ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo e(session('successMessage')); ?>

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

        <?php if(!$rows->total()): ?>
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo app('translator')->get('not_found'); ?>
          </div>
        <?php else: ?>
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>STT</th>
                <th>Tên nhãn</th>
                <th>Dịch nghĩa</th>
                <th><?php echo app('translator')->get('updated_at'); ?></th>
                <th><?php echo app('translator')->get('Thao tác'); ?></th>
              </tr>
            </thead>
            <tbody>

              <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="<?php echo e(route(Request::segment(2) . '.destroy', $row->id)); ?>" method="POST"
                  onsubmit="return confirm('<?php echo app('translator')->get('confirm_action'); ?>')">
                  <tr class="valign-middle">
                    <td>
                      <?php echo e($stt+1); ?>

                    </td>
                    <td>
                      <?php echo e($row->local); ?>

                    </td>
                    <td>
                    <?php $__currentLoopData = $row->json_param; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language => $translationText): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                      $tennuoc = 'Chưa định nghĩa';
                      if(isset($ngongu[$language])){
                        $tennuoc = $ngongu[$language];
                      }
                    ?>
                        <?php echo e($tennuoc.': '.$translationText); ?><br/>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td>
                      <?php echo e($row->updated_at); ?>

                    </td>
                    <td>
                      <a class="btn btn-sm btn-warning" data-toggle="tooltip" title="<?php echo app('translator')->get('update'); ?>"
                        data-original-title="<?php echo app('translator')->get('update'); ?>"
                        href="<?php echo e(route(Request::segment(2) . '.edit', $row->id)); ?>">
                        <i class="fa fa-pencil-square-o"></i>
                      </a>
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <button class="btn btn-sm btn-danger" type="submit" data-toggle="tooltip" title="<?php echo app('translator')->get('delete'); ?>"
                        data-original-title="<?php echo app('translator')->get('delete'); ?>">
                        <i class="fa fa-trash"></i>
                      </button>
                    </td>
                  </tr>
                </form>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
          </table>
        <?php endif; ?>
      </div>

      <?php if($rows->hasPages()): ?>
        <div class="box-footer clearfix">
          <?php echo e($rows->withQueryString()->links('admin.pagination.default')); ?>

        </div>
      <?php endif; ?>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/admin/pages/cms_translate/index.blade.php ENDPATH**/ ?>