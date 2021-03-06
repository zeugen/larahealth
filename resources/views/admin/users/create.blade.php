@extends('layouts.admin')

@section('body-content')
  <section class="content-header">
    <h1>Create New User</h1>
  </section>
  {{-- main content --}}
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="box box-primary">
          {{-- boxheader --}}
          <div class="box-header with-border">
            <h3 class="box-title">
              Create a new user
            </h3>

          </div>
          {{-- </div>box body --}}
          <div class="box-body">
            {!! Form::open(['method'=>"POST", "action"=>"AdminUsersController@store", 'files'=>true]) !!}
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
                  {!! Form::select('is_active',array(1=>'active', 0=>'Not Active'), 0, ['class'=>"form-control"]) !!}
              </div>
              <div class="form-group">

                  {!! Form::label('role_id', 'Role: ') !!}
                  {!! Form::select('role_id', [''=> 'Choose Options']+ $roles, null, ['class'=>"form-control"]) !!}
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
                {!! Form::submit('create User', ['class'=> 'btn btn-primary']) !!}
              </div>
            {!!Form::close() !!}
            @include('partials._formErrors')
          </div>


        </div>
      </div>
  </section>
@endsection
