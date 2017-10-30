<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads = '/img/user/';
    protected $img_placeholder = '/img/user/userplaceholder.png';

    protected $fillable=['file'];

    //use an accessor to show $uploads when image is rendered
    public function getFileAttribute($photo){
      
      return  $this->uploads.$photo;
    }

}
