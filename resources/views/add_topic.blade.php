@extends('master')

@section('title','New Discussion')
@section('body')
	<center>
	<div class="container">
		<h3>Start New Discussion</h3>
		<form method="post">
			<div class="row">
				<input type="text"  style="border-style: groove; border-radius: 10px;background-color: white;" placeholder="Discussion Title">
			</div>
			<div class="row" style="border-style: groove; border-radius: 10px;background-color: white;">
				<textarea style="height:auto;padding: 10px; " rows="10" placeholder="Discussion details here"></textarea>
			</div>
			<div class="row">
				<button class="waves-effect btn">Start Discussion!</button>
			</div>
		</form>
	</div>
	</center>
@stop