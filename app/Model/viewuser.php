<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class viewuser extends Model
{
    protected $table="users";
    protected $primarykey="id";
    protected $fillable=[
    'id', 
    'name',
    'email', 
    'password', 
    'created_at', 
    'updated_at' 
    ];
}
