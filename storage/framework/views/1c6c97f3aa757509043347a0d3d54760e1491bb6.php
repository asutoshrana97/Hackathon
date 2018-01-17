<?php $__env->startSection('title'); ?>
	Private Files:
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
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

        <div class="container">
            <h3>Uploaded Files</h3>
            <br>
            <h4>Public Files</h4>
            <b><div class="row">
                <div class="col s8">FileName</div>
                <div class="col s2 offset-s2">
                Download Link </div>
            </div></b><br>
                <?php
                    foreach($pub_files as $row){
                ?>
                    <div class="row">
                        <div class="col s8"><?php echo e($row->title); ?></div>
                        <div class="col s2 offset-s2">
                        <form method="post" action="/download" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <button class="btn waves-effect waves-light" type="submit" name="filename" value="<?php echo e($row->filename); ?>">download</button>
                        </form>
                         </div>
                    </div>
                <?php } ?>
            <br>


        <script type="text/javascript">
          $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();

        });
      </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>