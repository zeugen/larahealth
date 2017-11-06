<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Aurora</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /> --}}
    <!-- CSS Files -->
        {{-- <link href="{{asset('css/now-ui-kit.css')}}" rel="stylesheet" /> --}}
    {{-- bootstrap test --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    {{-- <link href="{{asset('css/demo.css')}}" rel="stylesheet" /> --}}
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">

            <div class="navbar-translate">
                <a class="navbar-brand" href="#" rel="tooltip" title="Fitness for your mind body and spirit" data-placement="bottom" >
                    Aurora
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image={{asset('img/blurred-image-1.jpg')}}>
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/register') }}">Create an account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Go to the home page" data-placement="bottom" href="{{url('/')}}">
                            <i class="fa fa-home"></i>
                            <p class="d-lg-none d-xl-none">Home</p>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header" filter-color="green">
        <div class="page-header-image" style="background-image:url(../img/loginfit2.jpg)"></div>
        <div class="container">
          <div class="row">

            <div class="col-md-12 content-center">
                <div class="card card-login card-plain">
                  <h1>Login</h1>
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                          <div class="col-md-12">
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">Password</label>

                          <div class="col-md-12">
                              <input id="password" type="password" class="form-control" name="password">

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-12 col-md-offset-4">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" class="bootstrap-switch"> Remember Me
                                  </label>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-12 col-md-offset-4">
                              <button type="submit" class="btn btn-lg btn-primary btn-round ">
                                  <i class="fa fa-btn fa-sign-in"></i> Login
                              </button>


                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-12 col-md-offset-4">
                              <a class="btn btn-lg btn-link btn-warning btn-round btn-round" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="{{url('/')}}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}">
                                About Us
                            </a>
                        </li>


                    </ul>
                </nav>
                <div class="copyright">
                    &copy; aurora
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<!--   Core JS Files   -->
<script src="{{asset('js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
 <script src="{{asset('/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{asset('js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
 <script src="{{asset('js/now-ui-kit.js')}}" type="text/javascript"></script>

</html>
