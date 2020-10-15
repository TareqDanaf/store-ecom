<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table='admins';
    protected $guarded=[];
    Protected $fillable =['email','password',''];
    Protected $hidden =['created_at','updated_at'];
    public $timestamps=true;

}
