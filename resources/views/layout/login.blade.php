<!DOCTYPE html>
<html lang="en">
<head>
  <title> IskoVote | Login </title>
  @include('components.header')
</head>

<body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>LOGIN</h1>
              <div>
                <label id="error-message" class="text-danger small"></label>
            </div>
              <div>
                <input id="admin_username" type="text" class="form-control input-validate" placeholder="Username" required="" />
              </div>
              <div>
                <input id="admin_password" type="password" class="form-control input-validate" placeholder="Password" required="" />
              </div>
              <div>
                <a id="btnLogin" class="btn btn-primary submit" href="dashboard.php" style="width: 300px">Log in</a>

              </div>

             
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
  @include('components.footer')

</html>

