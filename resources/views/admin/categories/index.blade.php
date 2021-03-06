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
                Add a new Category
              </h3>

          </div>
          {{--  box body --}}
          <div class="box-body">
            {!! Form::open(["method"=>"POST", 'action'=> "AdminCategoriesController@store"]) !!}
            <div class="form-group">
              {!! Form::label('name', 'Name: ') !!}
              {!!Form::text('name', null, ['class'=>"form-control"]) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Create Category', ['class'=> 'btn btn-default  btn-primary']) !!}
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
      <div class="col-xs-8">
        <div class="box">
          <div class="box-header">
            <div class="box-title">All Categories</div>
          </div>
          {{-- end boxheader --}}
          {{-- table --}}

            <div class="box-body table-responsive no-padding">
              <table class=" table table-hover">
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Time Created</th>
                  <th>Actions</th>
                </tr>
                @if($categories)
                  @foreach ($categories as $category)
                    <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                       <td>{{$category->created_at ? $category->created_at->diffForHumans():"no date"}}</td>
                      <td><a href="{{route("admin.categories.edit", $category->id)}}">Edit /delete</a></td>
                    </tr>
                  @endforeach
                @endif


              </table>
            </div>

        </div>
      </div>
    </div>
  </section>
@endsection
