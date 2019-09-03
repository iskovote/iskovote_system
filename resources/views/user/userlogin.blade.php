<!DOCTYPE html>
<html lang="en">
<head>
  <title> IskoVote | Login </title>

<style type="text/css">
  .bgimg {
  /* The image used */
  background-image: url("{{asset('/images/loginbg.jpg')}}");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: right;
  background-repeat: no-repeat;
  background-size: cover;
    }
</style>

  @include('components.header')
</head>

<body>
    <div class="bgimg">
      <div class="loginbox">
        <img src="{{asset('/images/iskovote.png')}}" class="logo">
        <h1 class="login-title">USER LOGIN</h1><br/>
        <form class="login-form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
            <p>Username</p>
            <input type="text" name="student_no" autocomplete="off" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="student_pw" autocomplete="off" placeholder="Enter Password"><br/>
            <button id="btn_userlog" type="submit">Login</button>
            <a href="" style="float: right; color: white;">Forgot Password?</a>
        </form>
        
      </div>
    </div>
      
  </body>
  @include('components.footer')

</html>

