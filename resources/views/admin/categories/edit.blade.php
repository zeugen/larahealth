@extends('layouts.admin');
@section('body-content')
  <section class="content-header">
    <h1>Categories <small>Create, update and delete categories</small></h1>
  </section>
  {{-- flash message holder --}}
  {{-- main content --}}
  <section class="content">
    <div class="row">
      {{-- edit/ add categories --}}
      <div class="col-xs-4">
        <div class="box box-primary">
          <div class="box-header with-border">

              <h3 class="box-title">
                Edit a  Category
              </h3>

          </div>
          {{--  box body --}}
          <div class="box-body">
            {!! Form::model($category, ["method"=>"PATCH", 'action'=> ["AdminCategoriesController@update", $category->id]]) !!}
            <div class="form-group">
              {!! Form::label('name', 'Name: ') !!}
              {!!Form::text('name', null, ['class'=>"form-control"]) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Update Category', ['class'=> 'btn btn-default  btn-primary']) !!}
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection
