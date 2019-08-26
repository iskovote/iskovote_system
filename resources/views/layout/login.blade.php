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
        <h1 class="login-title">ADMIN LOGIN</h1><br/>
        <form class="login-form" method="POST" action="{{ route('dashboard')}}">
          {{ csrf_field() }}
            <p>Username</p>
            <input class="@error('username') is-invalid @enderror" type="text" autocomplete="off" name="username" placeholder="Enter Username">
              @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            <p>Password</p>
            <input class="@error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter Password"><br/>
            @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
             @enderror
            <button type="submit">Login</button>
        </form>
        
      </div>
    </div>
      
  </body>
  @include('components.footer')

</html>

