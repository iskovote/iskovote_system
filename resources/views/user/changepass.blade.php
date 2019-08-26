  @extends('layout.app2')
  @section('title')
  Change Password
  @endsection
  <link rel="stylesheet" type="text/css" href="{{asset("/css/passuser.css")}}">
  @section('content')
  <div class="right_col" role="main">
   
   <form class="f1">
      <h2>Change Password:</h2>
      <input type="password" id="OldPassword" placeholder="Current Password" style="padding: 10px; font-size: inherit; display: block; margin-bottom: 25px; width: 100%; border: 2px solid #34495e;">
      <p class="OldPasswordEr"> </p>
      <input type="password" id="NewPassword" placeholder="New Password" style="padding: 10px; font-size: inherit; display: block; margin-bottom: 25px; width: 100%; border: 2px solid #34495e; ">
      <p class="NewPasswordEr"> </p>
      <input type="password" id="RetypePassword" placeholder="RetypePassword" style="padding: 10px; font-size: inherit; display: block; margin-bottom: 25px; width: 100%; border: 2px solid #34495e;">
      <p class="RetypePasswordEr"> </p>

       <a onclick="myFunction()">
          <span class="glyphicon glyphicon-eye-open"> </span>
        </a>

          <div>
            <div class="buttonPass-8">

            <div class="effPass-8"></div>
             <a> Change pass  </a>
          </div>
   
      
    </form>

    <footer style="color: gray; text-align: center; margin-top: 350px;">
      iSkoVote 2019-2020
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.0.js"
    integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
    crossorigin="anonymous">
    </script>
    <!--Script para sa navbar responsive-->
    <script>
       /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
   

 function myFunction() {

    var x = document.getElementById("OldPassword");
    var y = document.getElementById("NewPassword");
    var z = document.getElementById("RetypePassword");

    if (x.type == "password") {
    x.type = "text";
    y.type = "text";
    z.type = "text";
    } else {
    x.type = "password";
    y.type = "password";
    z.type = "password";
    }
    }
    </script>
</div>
  @endsection