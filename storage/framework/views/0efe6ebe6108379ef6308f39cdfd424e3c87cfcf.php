<?php $__env->startSection('title','Discussions started'); ?>

<?php $__env->startSection('css'); ?>
<style>
body{
	background-image: url('images/techandall_wallpaper_1.jpg');
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-size: cover;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

		<div class="container">
			<h3>Discussions by <?php echo e($_SESSION['firstname']); ?>:</h3>
			<?php
				foreach ($all as $row) {
			?><br>
				<div class="row">
					<a href="/view_topic/<?php echo e($row->id); ?>"><div class="col s10 offset-s1" style="border-style: groove;border-radius: 10px;background-color: yellow;height:auto;padding:10px;">
					<p style="font-size: 20px;font-family: 'Times New Roman', Times, serif;"><?php echo e($row->topic); ?></p></div></a>
				</div>
			<?php
				}
			?>
		</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>