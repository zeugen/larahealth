@extends('layouts.admin')

@section('body-content')
  <section class="content-header">
    <h1>Create New Post</h1>
  </section>
  {{-- main content --}}
  <section class="content">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="box box-primary">
          {{-- boxheader --}}
          <div class="box-header with-border">
            <h3 class="box-title">
              Create a new post
            </h3>

          </div>
          {{-- </div>box body --}}
            <div class="box-body">
              {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true ]) !!}
              <div class="form-group">
                {!! Form::label('title', 'Title: ') !!}
                {!! Form::text('title', null, ['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('category_id', 'Category: ') !!}
                {!! Form::select('category_id', array(1=>'laravel',2=>'js'), null, ['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('photo_id', 'Photo: ') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('body', ' Description: ') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control'])!!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::submit('Create Post', ['class'=> 'btn btn-block btn-primary']) !!}
            </div>
          {!!Form::close() !!}
          @include('partials._formErrors')

        </div>
      </div>
    </div>

  </section>
@endsection
