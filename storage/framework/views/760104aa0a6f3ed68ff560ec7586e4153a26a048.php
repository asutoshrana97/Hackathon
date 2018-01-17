<?php $__env->startSection('title','books'); ?>
<?php $__env->startSection('css'); ?>
<style>
body{
	background-image: url('images/a.jpg');
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
    <div class="row">
         <div class="col s2 offset-s2">
        <div class="card horizontal">
          <div class="card-image">
            <img src="images/a.jpg">
          </div>
          <div class="card-stacked">
            <div class="card-action">
              <a href="#">Book</a>
            </div>
          </div>
        </div>
        </div>
        <div class="col s2 offset-s1">
        <div class="card horizontal">
          <div class="card-image">
            <img src="images/a.jpg">
          </div>
          <div class="card-stacked">
            <div class="card-action">
              <a href="#">Book</a>
            </div>
          </div>
        </div>
        </div>
        <div class="col s2 offset-s1">
        <div class="card horizontal">
          <div class="card-image">
            <img src="images/a.jpg">
          </div>
          <div class="card-stacked">
            <div class="card-action">
              <a href="#">Book</a>
            </div>
          </div>
        </div>
        </div>
    </div>
    <div class="row">
         <div class="col s2 offset-s2">
        <div class="card horizontal">
          <div class="card-image">
            <img src="images/a.jpg">
          </div>
          <div class="card-stacked">
            <div class="card-action">
              <a href="#">Book</a>
            </div>
          </div>
        </div>
        </div>
        <div class="col s2 offset-s1">
        <div class="card horizontal">
          <div class="card-image">
            <img src="images/a.jpg">
          </div>
          <div class="card-stacked">
            <div class="card-action">
              <a href="#">Book</a>
            </div>
          </div>
        </div>
        </div>
        <div class="col s2 offset-s1">
        <div class="card horizontal">
          <div class="card-image">
            <img src="images/a.jpg">
          </div>
          <div class="card-stacked">
            <div class="card-action">
              <a href="#">Book</a>
            </div>
          </div>
        </div>
        </div>
    </div>
<div class="row">
         <div class="col s2 offset-s2">
        <div class="card horizontal">
          <div class="card-image">
            <img src="images/a.jpg">
          </div>
          <div class="card-stacked">
            <div class="card-action">
              <a href="#">Book</a>
            </div>
          </div>
        </div>
        </div>
        <div class="col s2 offset-s1">
        <div class="card horizontal">
          <div class="card-image">
            <img src="images/a.jpg">
          </div>
          <div class="card-stacked">
            <div class="card-action">
              <a href="#">Book</a>
            </div>
          </div>
        </div>
        </div>
        <div class="col s2 offset-s1">
        <div class="card horizontal">
          <div class="card-image">
            <img src="images/a.jpg">
          </div>
          <div class="card-stacked">
            <div class="card-action">
              <a href="#">Book</a>
            </div>
          </div>
        </div>
        </div>
  

</div></center>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>