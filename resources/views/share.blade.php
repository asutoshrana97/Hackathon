<<<<<<< HEAD
@extends('master')

@section('title','questionpaper')

@section('css')
<style>
body{
	background-image: url('/images/techandall_wallpaper_1.jpg');
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-size: cover;
}
</style>
@stop
@section('body')
<center>
<div class="container"><br><br>
    <div class="row">
        <div class="col s12 l5">
       <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Pubic Sharing  </span>
              <p>Upload Code Bytes for public sharing</p>
            </div>
            <div class="card-action">
                <a href="/view_public">View</a>
                                       <!-- Modal Trigger -->
              <a class=" modal-trigger" href="#modal1">Upload</a>
            </div>

              <!-- Modal Structure -->
              <div id="modal1" class="modal">
                <div class="modal-content">
                                                  <div class="row">
                <form class="col s12" method="POST" action="/insert" enctype="multipart/form-data">
                    {{csrf_field()}}

                  <div class="row">
                    <div class="input-field col s12">
                      <input type = "text" name="title">
                      <label for="textarea1">Title</label>
                    </div>
                  </div>

    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="image">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one">

      </div>
    </div>

  <button class="btn waves-effect waves-light" type="submit" name="submit" value="0">Submit
    <i class="material-icons right">send</i>
  </button>
                </form>
              </div>
                </div>
              </div>
            </div>
          </div>
        <div class="col s12 l5">
       <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Private sharing</span>
              <p>Code Bytes Upload for Personal Use</p>
            </div>
            <div class="card-action">
                <a href="/view_private">View</a>
                                       <!-- Modal Trigger -->
              <a class=" modal-trigger" href="#modal2">Upload</a>
            </div>

              <!-- Modal Structure -->
              <div id="modal2" class="modal">
                <div class="modal-content">
                                                  <div class="row">
                <form class="col s12" method="POST" action="/insert" enctype="multipart/form-data">
                    {{csrf_field()}}

                  <div class="row">
                    <div class="input-field col s12">
                      <input type = "text" name="title">
                      <label for="textarea1">Title</label>
                    </div>
                  </div>

    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="image">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one">
          <input type="hidden" name="status" value="1">
      </div>
    </div>

  <button class="btn waves-effect waves-light" type="submit" name="submit" value="1">Submit
    <i class="material-icons right">send</i>
  </button>
                </form>
              </div>
                </div>
              </div>
            </div>
          </div>
                  </div>
</div>
</center>
@stop
=======

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
    </body>
  </html>
        
>>>>>>> 72850b892129c96d8678a192683a8f2d16ab9691
