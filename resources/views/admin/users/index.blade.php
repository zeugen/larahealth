@extends('layouts.admin')

@section('body-content')
  <section class="content-header">
    <h1>Users <small>All users registered in the system</small></h1>
  </section>

  {{-- Main Content --}}
  <section class="content">
    <div class="row">
      <div class="col-xs-12 ">
        <div class="box">


        {{-- box header --}}
        <div class="box-header">
          <div class="box-title">
            Users Table
          </div>
        </div>
        {{-- end box header --}}
        {{-- table --}}
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Status</th>
              <th>Time Created</th>
              <th>Time Updated</th>
            </tr>
            {{-- table body --}}
            @if($users)
              @foreach ($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->role->name}}</td>
                  <td>
                    {{$user->is_active==1?'active':'Not ACTIVE'}}
                  </td>

                  <td>{{$user->created_at->diffForHumans()}}</td>
                  <td>{{$user->updated_at ->diffForHumans()}}</td>
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
