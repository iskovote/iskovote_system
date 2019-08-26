@extends('layout.app2')
@section('title')
Home
@endsection
<link rel="stylesheet" type="text/css" href="{{asset("/css/votenowuser.css")}}">

@section('content')
<div class="right_col" role="main">
	
	<div class="container my-container">
		<h2>PRESIDENT </h2>
		<div class="row my-row" id="president">
			<div class="col-md-3 col-sm-5 my-col ">
				<!-- Image Modal -->
				<input type="image"  class="img-responsive" class="my-image" src="images/president.jpg" id="my-image"
				data-toggle="modal" data-target="#myModal">
				<label id="my-name" class="label"  > Bianca Neris </label>
				<!-- Checkbox -->
				<div class="checkbox-container">
					<input type="checkbox" id="my-checkbox" name="cb1" 
					onclick="window.location ='#vicepresident';"/>
					<dd  id="my-vote" for ="cb1">VOTE </dd>
				</div>
			</div>

			<div class="col-md-3 col-sm-5 my-col ">
				<!-- Image Modal -->
				<input type="image"  class="img-responsive" class="my-image" src="images/president2.jpg" id="my-image"
				data-toggle="modal" data-target="#myModal">
				<label id="my-name" class="label"  > Mark Anthony Beran</label>
				<div class="checkbox-container">
				<!-- Checkbox -->
					<input type="checkbox" name="cb2" id="check">
					<dd id="my-vote" for ="cb2">VOTE</dd>
				</div>
			</div>

			<div class="col-md-3 col-sm-5 my-col ">
				<!-- Image Modal -->
				<input type="image"  class="img-responsive" class="my-image" src="images/president2.jpg" id="my-image"
				data-toggle="modal" data-target="#myModal">
				<label id="my-name" class="label"  > Mark Anthony Beran</label>
				<div class="checkbox-container">
				<!-- Checkbox -->
					<input type="checkbox" name="cb2">
					<dd id="my-vote" for ="cb2">VOTE</dd>
				</div>
			</div>

			<div class="col-md-3 col-sm-5 my-col ">
				<!-- Image Modal -->
				<input type="image"  class="img-responsive" class="my-image" src="images/president2.jpg" id="my-image"
				data-toggle="modal" data-target="#myModal">
				<label id="my-name" class="label"  > Mark Anthony Beran</label>
				<div class="checkbox-container">
				<!-- Checkbox -->
					<input type="checkbox" name="cb2">
					<dd id="my-vote" for ="cb2">VOTE</dd>
				</div>
			</div>

			<div class="col-md-3 col-sm-5 my-col ">
				<!-- Image Modal -->
				<input type="image"  class="img-responsive" class="my-image" src="images/president2.jpg" id="my-image"
				data-toggle="modal" data-target="#myModal">
				<label id="my-name" class="label"  > Mark Anthony Beran</label>
				<div class="checkbox-container">
				<!-- Checkbox -->
					<input type="checkbox" name="cb2">
					<dd id="my-vote" for ="cb2">VOTE</dd>
				</div>
			</div>
		</div>

		<h2>VICE PRESIDENT </h2>
		<div class="row my-row" id="vicepresident">
			<div class="col-md-4 col-sm-2 my-col ">
				<!-- Image Modal -->
				<input type="image"  class="img-responsive" class="my-image" src="images/president.jpg" id="my-image"
				data-toggle="modal" data-target="#myModal">
				<label id="my-name" class="label"  > Bianca Neris </label>
				<!-- Checkbox -->
				<div class="checkbox-container">
					<input type="checkbox" name="cb1">
					<dd  id="my-vote" for ="cb1">VOTE </dd>
				</div>
			</div>
			<div class="col-md-4 col-sm-2 my-col ">
				<!-- Image Modal -->
				<input type="image"  class="img-responsive" class="my-image" src="images/president2.jpg" id="my-image"
				data-toggle="modal" data-target="#myModal">
				<label id="my-name" class="label"  > Mark Anthony Beran</label>
				<div class="checkbox-container">
				<!-- Checkbox -->
					<input type="checkbox" name="cb2">
					<dd id="my-vote" for ="cb2">VOTE</dd>
				</div>
			</div>
				<div class="col-md-4 col-sm-2 my-col ">
				<!-- Image Modal -->
				<input type="image"  class="img-responsive" class="my-image" src="images/president2.jpg" id="my-image"
				data-toggle="modal" data-target="#myModal">
				<label id="my-name" class="label"  > Mark Anthony Beran</label>
				<div class="checkbox-container">
				<!-- Checkbox -->
					<input type="checkbox" name="cb2">
					<dd id="my-vote" for ="cb2">VOTE</dd>
				</div>
				</div>
			</div>
		
			<h2>SECRETARY</h2>
		<div class="row my-row" id="secretary">
			<div class="col-md-12 col-sm-2 my-col ">
				<!-- Image Modal -->
				<input type="image"  class="img-responsive" class="my-image" src="images/president.jpg" id="my-image"
				data-toggle="modal" data-target="#myModal">
				<label id="my-name" class="label"  > Bianca Neris </label>
				<!-- Checkbox -->
				<div class="checkbox-container">
					<input type="checkbox" name="cb1">
					<dd  id="my-vote" for ="cb1">VOTE </dd>
				</div>
			</div>

		</div>
	</div>
</div>



		<!-- Modal -->
		<div class="container">
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Candidate Name: Bianca Neris Marquez</h4>
						</div>
						<div class="modal-body">
							<div class="col-md-6">
								
								<p> <img src="images/president.jpg" height="50%" width="50%"></p>
							</div>
							<p><b>Background</b></p>
							<p>Course: Civil Engineer</p>
							<p>Year Level: 5thYear</p>
							<p>Age: 20 years old</p>
							<hr>
							<p><b>partylist</b></p>
							<p>Elite</p>
						</div>
						<div class="modal-footer">
							<button type="button" id = "modalbtn" class="btn btn-danger fa fa-close" data-dismiss="modal" style="width: 80%;">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	<script type="text/javascript">
		$(function () {
			$("#my-checkbox").change(function(){
				var st = this.checked;
				if(st){
					$("#check").prop("disabled",false);
				}
				else{
					$("#check").prop("disabled",true);
				}
							});
		});
	</script>
		
		
		@endsection