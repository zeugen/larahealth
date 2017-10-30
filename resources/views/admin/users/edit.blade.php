@extends('layouts.admin')

@section('body-content')
  <section class="content-header">
    <h1>Edit User</h1>
  </section>
  {{-- main content --}}
  <section class="content">
    <div class="row">
      {{-- show other content --}}
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header">
            <h2 class="box-title">{{$user->name}}</h2>
          </div>
          <div class="box-body">
            <img src="{{$user->photo ? $user->photo->file : url('/img/user/userplaceholder.png')}}" alt="" class="img-responsive img-rounded img-th-200">
          </div>
        </div>

      </div>
      <div class="col-md-6 ">
        <div class="box box-primary">
          {{-- boxheader --}}
          <div class="box-header with-border">
            <h3 class="box-title">
              Edit existing user
            </h3>
          {{-- </div>box body --}}
          <div class="box-body">
            {!! Form::model($user,['method'=>"PATCH", "action"=>["AdminUsersController@update", $user->id], 'files'=>true]) !!}
              <div class="form-group">

                  {!! Form::label('name', 'Name: ') !!}
                  {!! Form::text('name', null, ['class'=>"form-control"]) !!}
              </div>
              <div class="form-group">

                  {!! Form::label('email', 'Email: ') !!}
                  {!! Form::email('email', null, ['class'=>"form-control"]) !!}
              </div>
              <div class="form-group">

                  {!! Form::label('is_active', 'Status: ') !!}
                  {!! Form::select('is_active',array(1=>'active', 0=>'Not Active'), null, ['class'=>"form-control"]) !!}
              </div>
              <div class="form-group">

                  {!! Form::label('role_id', 'Role: ') !!}
                  {!! Form::select('role_id',  $roles, null, ['class'=>"form-control"]) !!}
              </div>
              <div class="form-group">

                  {!! Form::label('photo_id', 'Upload you Avatar (profile picture): ') !!}
                  {!! Form::file('photo_id', null, ['class'=>"form-control"]) !!}
              </div>
              <div class="form-group">

                  {!! Form::label('password', 'Password: ') !!}
                  {!! Form::password('password',  ['class'=>"form-control"]) !!}
              </div>
              <div class="form-group">
                {!! Form::submit('Edit User', ['class'=> 'btn btn-primary']) !!}
              </div>
            {!!Form::close() !!}
            @include('partials._formErrors')
          </div>
          </div>

        </div>
      </div>

    </div>
  </section>
@endsection
