@extends('master')
@section('title')
	Discussion Forum
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
	<!-- <form method="post">
		<div class="row">
			<div class="col s9">
				<input type="text"  style="border-style: groove; border-radius: 10px;background-color: white;border-bottom: none;" placeholder="Search Previously Discussed Topics!" name="search" id="searchbox"/>	
			</div>
			<div class="col s3">
				<button class="btn waves-effect" type="submit">Search!</button>
			</div>
		</div>
	</form>
	 -->
	<div class="row">
		<div class="input-field col s6 offset-s3">
			<input name="name" id="search_box" type="text" style="border-style: groove; border-radius: 10px;background-color: white;border-bottom: none;" placeholder="Search Previously Discussed Topics!">
		</div>

		<div id="suggesstion_box" class="col s6 offset-s3" style="border-style: groove;border-radius: 10px;border-bottom: none;background-color: #FFFFEE;height: auto; padding: 10px;"><ul><li>Enter Text to Search</li></ul></div>

	</div>
		
	<button type="submit" hidden name="submit"></button>
	

	 <br><br>
	</div>
	</center>

	<script type="text/javascript">
		$(document).ready(function() {
		$("#search_box").keyup(function(){
			    	$("#search_box").css("background","#F0F0F0");
			    	$.ajax({
						type: "GET",
						url: "gethint.php",
						data:'keyword='+$(this).val(),
						beforeSend: function(){
							
						},
						success: function(data){
							$("#suggesstion_box").show();
							$("#suggesstion_box").html(data);
						}
					});
				});
			});
	</script>
@stop