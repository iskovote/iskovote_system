@extends('layout.app')

@section('title')
Sample
@endsection

@section('content')
<!--page content-->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Sample</h3>
			</div>
		</div>

		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Launch demo modal
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="" method="POST">
						{{csrf_field()}}
					<div class="modal-body">

							<div class="form-group">
								<label for="exampleInputEmail1">Position</label>
								<input name="position" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter position">
							</div>
							
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection