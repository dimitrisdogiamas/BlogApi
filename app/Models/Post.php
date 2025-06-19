<?php

namespace App\Models;

// eloquent orm for database interaction
use Illuminate\Database\Eloquent\Model;


//  inherit from model class
class Post extends Model
{
    //
 protected $fillable = [
    'title',
    'content',
 ];
};
