@extends('master')
@section('title')
	
@stop
@section('body')
	<center>
	<div class="container">
	<h3>Discussion Forum</h3>
	<div class="row">
		<div class="col s4 offset-s8">
			<a href="/add_topic"><button class="btn waves-effect">Start New Discussion</button></a>
		</div>
	</div>
	
	<br><br>
	<form method="post">
		<div class="row">
			<div class="col s9">
				<input type="text"  style="border-style: groove; border-radius: 10px;background-color: white;" placeholder="Search Previously Discussed Topics!" name="search"/>	
			</div>
			<div class="col s3">
				<button class="btn waves-effect" type="submit">Search!</button>
			</div>
		</div>
	</form>
	<br><br>
	</div>
	</center>
@stop