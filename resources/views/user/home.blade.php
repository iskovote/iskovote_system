	@extends('layout.app2')
	@section('title')
	Home
	@endsection
	<link rel="stylesheet" type="text/css" href="{{asset("/css/homeuser.css")}}">
	@section('content')
	<div class="right_col" role="main">

		<div id = "con" class="container" > 
			<div class="card-header" class="election">
				<p id="ElectionNameID"> <h1> Student Council Election 2019-2020</h1></p>
				<p id="ElectionStartEndID"> <label> Start </label>  - May/2/2019  <label> End </label> - May/5/2019</p>
				<!--Change the window location in case na mababago yung url -->
				<div class="button-8 fa " 
				onclick="window.location='http://localhost:8000/votenow'" >

				<div class="eff-8"></div>
				<div class="fa fa-check-circle"> <a> Vote Now </a></div>
			</div>
		   </div>
	   </div>


	<div id = "con" class="container"> 
		<div>
			<div class="card-header" >
				<p id="ElectionNameID"> <h1>iSite 2019-2020</h1></p>
				<p id="ElectionStartEndID"> <label> Start </label>  - May/2/2019 <label> End </label> - May/5/2019</p>

				<div class="button-8 fa " 
				onclick="window.location='http://localhost:8000/votenow'" >

				<div class="eff-8"></div>
				<div class="fa fa-check-circle"> <a> Vote Now </a></div>
			</div>


			</div>
		</div>



		
	</div>
</div>
@endsection

