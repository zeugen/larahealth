<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','is_active','photo_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    //set relationships

    //user-role relationship
    public function role(){
      return $this->belongsTo('App\Role');
    }

    //userprofilepicrelationship
    public function photo(){
       return $this->belongsTo('App\Photo');
    }

    //isAdmin function here checks whether admin is logged in you can do check role too
    public function isAdmin(){
      if($this->role->name === "administrator" && $this->is_active  === 1){
        return true;
      }
      return false;
    }
    //posts and user relationship
    public function posts(){
      return $this->hasMany('App\Post');
    }




}
