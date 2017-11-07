@extends('layouts.app')

@section('content')
  <div class="wrapper">
      <div class="page-header clear-filter" filter-color="green">
          <div class="page-header-image" data-parallax="true" style="background-image:url(../img/about.jpg)">
          </div>
          <div class="container">
              <div class="content-center brand">
                  <img class="n-logo" src={{asset('img/plantlogo.png')}} alt="">
                  <h1 class="h1-seo">Aurora.</h1>
                  <h3>For those in pursuit of good health</h3>
              </div>

          </div>
      </div>
      <div class="main">

          <div class="section section-nucleo-icons">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-md-12">
                          <h2 class="title">Your health comes first!</h2>
                          <h5 class="description">
                              We are a team of renowned  specialists from various areas of health and fitness with extensive experience. Our mission is We help people everywhere look good, feel good, do good in order to live more fulfilling lives every day.
                          </h5>
                          <!-- <div class="nucleo-container">
            <img src="assets/img/nucleo.svg" alt="">
          </div> -->
                          @if (Auth::guest())


                          <a href="{{ url('/login') }}" class="btn btn-primary btn-round btn-lg" target="_blank">LOGIN</a>
                          <a href="{{ url('/register') }}" class="btn btn-primary btn-simple btn-round btn-lg" target="_blank">REGISTER</a>
                          @endif
                      </div>
                      <div class="col-lg-6 col-md-12">
                          <div class="icons-container">

                              <img src={{asset('img/aurora.png')}} alt="" class="img-responsive  img-raised">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="section">
              <div class="container text-center">
                  <div class="row justify-content-md-center">
                      <div class="col-md-12 col-lg-8">
                          <h2 class="title">About us</h2>
                          <h5 class="description">Afya fitness is platform used by a select team that includes many renowned nutritionists, and specialists from other areas of health and fitness, who share their extensive experience on how to improve your personal wellbeing.</h5>
                          <a href="{{url('/about')}}" class="btn btn-primary btn-round btn-lg" >View more</a>
                      </div>
                  </div>
              </div>
          </div>



      </div>
      <!-- end main  -->

      <footer class="footer" data-background-color="black">
          <div class="container">
              <nav>
                  <ul>
                      <li>
                          <a href="/home">
                              Aurora
                          </a>
                      </li>
                      <li>
                          <a href="/about">
                              About Us
                          </a>
                      </li>

                  </ul>
              </nav>
              <div class="copyright">
                  &copy; Aurora
                  <script>
                      document.write(new Date().getFullYear())
                  </script>
              </div>
          </div>
      </footer>
  </div>
@endsection
