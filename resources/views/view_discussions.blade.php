@extends('master')

@section('title','Discussions started')
	
@section('body')
	
		<div class="container">
			<h3>Discussions by {{$_SESSION['firstname']}}:</h3>
			<?php
				foreach ($all as $row) {
			?><br>
				<div class="row">
					<a href="/view_topic/{{$row->id}}"><div class="col s10 offset-s1" style="border-style: groove;border-radius: 10px;background-color: yellow;height:auto;padding:10px;">
					<p style="font-size: 20px;font-family: 'Times New Roman', Times, serif;">{{$row->topic}}</p></div></a>
				</div>
			<?php
				}
			?>
		</div>
	
@stop