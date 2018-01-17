<?php $__env->startSection('title'); ?>
Search result!
<?php $__env->stopSection(); ?>


<?php $__env->startSection('body'); ?>
	<table class="centered bordered">
	<tr>
		<td><b>Title</b></td>
		<td><b>Description</b></td>
		<td><b>Requirements</b></td>
		<td><b>Owner<b></td>
	</tr>
	<?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($user->title); ?></td>
		<td><?php echo e($user->description); ?></td>
		<td><?php echo e($user->requirements); ?></td>
		<td><?php echo e($user->owner); ?></td>

	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>