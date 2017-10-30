<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Photo;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\UsersEditRequest;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //populate the users index with data from users table
        $users = User::all();
        //send admin to users index
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::lists('name','id')->all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //check if password is empty
        if(trim($request->password == '')){
          $input = $request->except('password');
        }else{
          $input = $request->all();
        }
        //recieve data from the create user form
        //do the following if we have a photo

        if($file = $request->file('photo_id')){
          $name = time().$file->getClientOriginalName();//get name of the image and append to  it a timestamp
          $file->move('img/user',$name); //moves the image to public directory
          $photo = Photo::create(['file' => $name]);

          $input['photo_id'] = $photo->id;


        }
        //else if no photo was uploaded
        //first encrypt password
        $input['password'] = bcrypt($request -> password);
        User::create($input);
        //return $request->all();
        // User::create($request->all());
        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //pass in roles as in create method
        $roles = Role::lists('name', 'id')->all();

        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user','id', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
        //
        //find users
        $user = User::findOrFail($id);

        //check if password is empty
        if(trim($request->password == '')){
          $input = $request->except('password');
        }else{
          $input = $request->all();
        }

        //
        if($file = $request->file('photo_id')){
          $name = time().$file->getClientOriginalName();
          $file->move('img/user', $name);
          $photo = Photo::create(['file'=>$name]);
          $input['photo_id'] = $photo->id;
        }
        //first encrypt password
        $input['password'] = bcrypt($request -> password);
        $user->update($input);
       return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
