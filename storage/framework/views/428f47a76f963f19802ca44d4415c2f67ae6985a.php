
<?php $__env->startSection('content'); ?>
<h1><?php echo app('translator')->get('Thông báo: Đặt lịch khám'); ?></h1>
<p><strong><?php echo app('translator')->get('Họ tên'); ?></strong>: <?php echo e($contact->name); ?>  </p>
<p><strong><?php echo app('translator')->get('Email'); ?></strong>: <?php echo e($contact->email); ?>  </p>
<p><strong><?php echo app('translator')->get('Số điện thoại'); ?></strong>: <?php echo e($contact->phone); ?>  </p>
<p><strong><?php echo app('translator')->get('Ghi chú'); ?></strong>: <?php echo e($contact->content); ?>  </p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.email', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/emails/contact.blade.php ENDPATH**/ ?>