<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table="setting";
    protected $primarykey="id";
    protected $fillable=[
    'id', 
    'nama_desa',
    'alamat', 
    'saldo', 
    'sisa_saldo',
    'profit', 
    'created_at', 
    'updated_at' 
    ];
}
