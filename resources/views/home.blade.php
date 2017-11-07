@extends('layouts.afterloginnav')

@section('content')
<div class="wrapper">

  <div class="page-header clear-filter" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image:url(../img/about.jpg)">
      </div>
      <div class="container">
        <section class="featured slideInLeft">
          <div class="d-md-flex justify-content-start text-left ">
            <div class="col-md-6">
              <header class="featured-header">
                <h2>FEATURED</h2>
                <div><img src="" alt=""><h6>Sebastian Miller </h6></div>
                <h1>Proud to be smoke free</h1>
              </header>
              <article class="featured-article">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum animi est ut doloribus ea tenetur vero, necessitatibus sunt ducimus placeat. In vero eaque recusandae quae ad ex repudiandae nihil eligendi!
              </article>
              <div class="featured-links">
                <button class="btn btn-primary btn-lg btn-round hvr-wobble-vertical" type="button">Read more</button>
                <button class="btn btn-primary btn-lg btn-simple btn-round hvr-wobble-vertical" type="button"> or View more</button>
              </div>
            </div>

          </div>
        </section>

      </div>
  </div>
  <div class="main">
    <div class="container-fluid">
        <div class=" row">
            {{-- this column will hold the list of moderators --}}
             <div class="col-md-3 ">
                <div class="specialists-panel ">
                    <h6>Specialists</h6>
                    <img src="{{asset('img/user/7.jpg')}}" alt="" class="img-responsive rounded-circle">
                    <ul class="specialist-profile-list">
                      <li >



                      </li>
                    </ul>

                </div>
            </div>
            {{-- this column will hold the articles --}}
            <div class="col-md-6">
                <section class="article-panel  raised">
                  <div class="row">
                    {{-- blog image --}}
                    <div class="col-md-5 col-sm-4">
                      <img src="{{asset('img/fitness_tracker.jpg')}}" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-7 col-sm-8">
                      <header>
                        <div class="post-attrib">
                          <span>Sebastian Wanyoike</span>
                          <span>Fitness</span>
                        </div>
                        <h2>Proud to be smoke free</h2>
                      </header>
                      <article>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum animi est ut doloribus ea tenetur vero, necessitatibus sunt ducimus placeat. In vero eaque recusandae quae ad ex repudiandae nihil eligendi!</p>

                      </article>
                      <footer>
                        <a href="" class="btn btn-primary ">Read more</a>
                        <span>
                        <a href="" data-toggle="tooltip" data-placement="top" title="facebook share" data-container="body" data-animation="true"><i class="fa fa-share" aria-hidden="true"></i></a>
                        <a href="" data-toggle="tooltip" data-placement="bottom" title="like this article" data-container="body" data-animation="true"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </span>

                      </footer>
                    </div>
                  </div>
                </section>
                <section class="article-panel ">
                  <div class="row">
                    {{-- blog image --}}
                    <div class="col-md-5 col-sm-4">
                      <img src="{{asset('img/fitness_tracker.jpg')}}" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-7 col-sm-8">
                      <header>
                        <div class="post-attrib">
                          <span>Sebastian Wanyoike</span>
                          <span>Fitness</span>
                        </div>
                        <h2>Proud to be smoke free</h2>
                      </header>
                      <article>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum animi est ut doloribus ea tenetur vero, necessitatibus sunt ducimus placeat. In vero eaque recusandae quae ad ex repudiandae nihil eligendi!</p>
                      </article>
                      <footer>
                        <span><i class="fa fa-share" aria-hidden="true"></i>share</span>
                        <span><i class="fa fa-heart-o" aria-hidden="true"></i>like</span>
                      </footer>
                    </div>
                  </div>
                </section>
            </div>
            {{-- this column will hold the categories, filters, tags, links --}}
            <div class="col-md-3 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in! <h1>users home page that should be accessed after login</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>

</div>
@endsection
