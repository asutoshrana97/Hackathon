<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    
        <div class="container">
            <h3>Uploaded Files</h3>
            <br>
            <h4>Public Files</h4>
                <?php
                    foreach($pub_files as $row){
                ?>
                    <div class="row">
                        <div class="col s8"><?php echo e($row->title); ?></div>
                        <div class="col s1 offset-s3">
                        <form method="post" action="/download" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <button class="btn waves-effect waves-light" type="submit" name="filename" value="<?php echo e($row->filename); ?>">download</button>
                        </form>
                         </div>
                    </div>
                <?php } ?>
            <br>
            <h4>Private Files</h4>
            <?php
                    foreach($pri_files as $row){
                ?>
                    <div class="row">
                        <div class="col s8"><?php echo e($row->title); ?></div>
                        <div class="col s1 offset-s3">
                        <form method="post" action="/download" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        
                        <button class="btn waves-effect waves-light" type="submit" name="filename" value="<?php echo e($row->filename); ?>">download</button>
                        </form>
                    </div>
                <?php } ?>
        </div>
        
        <script type="text/javascript">
          $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
         
        });
      </script>
    </body>
  </html>
        
