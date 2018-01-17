<?php $__env->startSection('title'); ?>
	Discussion Thread #<?php echo $id;?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>
body{
	background-image: url('/images/techandall_wallpaper_1.jpg');
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-size: cover;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>


	<div class="container">
	<center><h3>Discussion Thread #<?php echo e($id); ?></h3></center>

		<div class="row" style="border-style: groove; border-radius: 10px;background-color: white;padding: 10px;">
			<h5><?php echo e($res->topic); ?></h5>
			<p style="font-style: italic;"><?php echo e($res->username); ?></p><br>
			<p><?php echo e($res->topic_description); ?></p>
		</div>

		<?php
			foreach($rep as $row){
		?>

					<div class="row" style="border-style: groove; border-radius: 10px;background-color: white;padding: 10px;">
						<b><p style="font-style: italic;"><?php echo e($row->username); ?> </b>commented:</p><br>
						<p><?php echo e($row->message); ?></p>
					</div>

		<?php
			}
		?>
		<br>
	<form method="post" action="/add_comment">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<input type="hidden" name="id" value="<?php echo e($id); ?>">
		<div class="row" style="border-style: groove; border-radius: 10px;background-color: white;padding: 10px;">
			<textarea name="msg" style="height:auto; padding: 10px;border-style: groove; border-radius: 10px;" rows="2" placeholder="Reply to this thread"></textarea>
		</div>
		<div class="row">
			<div class="col s1 offset-s10">
				<button class="btn waves-effect" name="submit" type="submit">Reply</button>
			</div>
		</div>
	</form>
	</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>