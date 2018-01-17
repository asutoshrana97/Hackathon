<?php
$id=$subject[0];
$subject = \DB::table('shared_documents')->where('course_code',$id)->get();
$items=count($subject);
?>


<?php $__env->startSection('title','subject_show'); ?>
<?php $__env->startSection('css'); ?>
<style>
body{
	background-image: url('/images/a.jpg');
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-size: cover;
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<center>
<div class="container">
    <h3 align='center'>Source Drive</h3>
    <div class="row">
        <div class="col s3 offset-s0">
            <a href="subject"><button class="btn">SUBJECTS</button></a>
        </div>
        <div class="col s3 ">
            <a href="questionpaper"><button class="btn">SOLVED PAPERS</button></a>
        </div>
        <div class="col s3 ">
            <a href="tutorial"><button class="btn">TUTORIALS</button></a>
        </div>
        <div class="col s3 ">
            <a href="books"><button class="btn">BOOKS</button></a>
        </div>
    </div>
    </div>
</center>
<center>

    <br><br><br><br>
<div class="container">
        <div class="panel panel-default">
                <div class="panel-heading"><h4 align="center"><b>Your Results:</b></h4>
                </div>

            <table >
                <?php if($items): ?>
                    <tr >
                        <th >Name</th>
                        <th>Link</th>
                        <th>Type</th>

                        </tr>

                        <?php $__currentLoopData = $subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->username); ?></td>
                            <td>
                                <form method="post" action="/download">
                                    <?php echo e(csrf_field()); ?><button type="submit" name="filename" value="<?php echo e($user->file_url); ?>" class="btn waves-effect">Download</button>
                                </form>
                            </td>
                            <td><b><?php echo e($user->type); ?></b></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <h5 align='center' ><i class="green-text">Sorry, no tutorials are there....</i></h5>
                <?php endif; ?>
    </table>
</div>
    </div>

</center>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>