  @extends('layout.app2')
  @section('title')
 Help
  @endsection
  <link rel="stylesheet" type="text/css" href="{{asset("/css/helpuser.css")}}">
  @section('content')
<div class="right_col" role="main">
  <h2>  Help <i class="fa fa-question-circle"></i> </h2> 

  <h2>Guide How to Vote</h2>

  <center><h3>step 1:</h3></center>
  <p>After you log in to your account, you will see the on-going elections on the dashboard</p>
  <p><img src="images/votenow.png" height="80%" width="90%">


  <hr>
  <center><h3>step 2:</h3></center>
  <p>After you click the “Vote Now”, you will see the running candidate for every positions</p>
  <p><img src="images/list.png" height="80%" width="90%">

  <hr>

  <div>

  <hr>
  <center><h3>step 3:</h3></center>
  <p>Click the picture of your chosen candidate</p>
  <p><img src="images/click1.png " height="50%" width="45%"> 
  	<img src="images/click2.png" height="50%" width="45%"></p>
  <p></p>
  <hr>	
</div>

  <hr>
  <center><h3>step 4:</h3></center>
  <p>After picking the candidates of every position click the “Submit” button.</p>
  <p><img src="images/submit.png" height="80%" width="90%"></p>
  <hr>
 <h4> 
	<center><label>Note!</label></center>
  <p style="margin-bottom: 10%;"> Voters can only view the result of the election if the election has ended!</p>

</h4>

</div>

  
  @endsection