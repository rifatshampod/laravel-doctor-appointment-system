<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>KNIT - Log In</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff" />
    <!-- Retina iPad Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="http://placehold.it/144.png/000/fff"
    />
    <!-- Retina iPhone Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="http://placehold.it/114.png/000/fff"
    />
    <!-- Standard iPad Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="http://placehold.it/72.png/000/fff"
    />
    <!-- Standard iPhone Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="57x57"
      href="http://placehold.it/57.png/000/fff"
    />

    <!-- Styles -->
    <link href="admin/assets/css/lib/font-awesome.min.css" rel="stylesheet" />
    <link href="admin/assets/css/lib/themify-icons.css" rel="stylesheet" />
    <link href="admin/assets/css/lib/bootstrap.min.css" rel="stylesheet" />
    <link href="admin/assets/css/lib/helper.css" rel="stylesheet" />
    <link href="admin/assets/css/style.css" rel="stylesheet" />
  </head>

  <body style="background-color: #343957">
    <div class="unix-login">
      <div class="container-fluid">
        <div
          class="row justify-content-center align-items-center"
          style="min-height: 100vh"
        >
          <div class="col-lg-5">
            <div class="login-content">
              <div class="login-logo">
                <a href="index.html"><span>Doctor Appointment</span></a>
              </div>
              <div class="login-form">
                <h4>Admin Login</h4>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <label>Email address</label>
                    <input
                      type="email" name="email"
                      class="form-control"
                      placeholder="Email"
                    />
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input
                      type="password" name="password"
                      class="form-control"
                      placeholder="Password"
                    />
                  </div>
                  <div class="checkbox">
                    <label> <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }} name="remember" /> Remember Me </label>
                    <label class="pull-right">
                      <a href="{{ route('password.request') }}">Forgotten Password?</a>
                    </label>
                  </div>
                  <button
                    type="submit"
                    class="btn btn-primary btn-flat m-b-30 m-t-30"
                  >
                    Sign in
                  </button>
                  <!--
                  <div class="register-link m-t-15 text-center">
                    <p>
                      Don't have account ?
                      <a href="signup.html"> Sign Up Here</a>
                    </p>
                  </div>  -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
