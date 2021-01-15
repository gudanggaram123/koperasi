<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table="produk";
    protected $primarykey="id";
    protected $fillable=[
        'nama_brg',
        'stok_brg',
        'status',
        'updated_at',
        'created_at'
    ];
}
