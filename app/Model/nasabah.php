<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class nasabah extends Model
{
    protected $table="nasabah";
    protected $primarykey="id";
    protected $fillable=[
        'kd_nasabah',
        'nama',
        'username',
        'email', 
        'password', 
        'jkl', 'no_hp', 
        'alamat', 
        'tempat_lahir', 
        'tgl_lahir', 
        'no_ktp', 
        'status', 
        'updated_at',
        'created_at'

    ];

}
