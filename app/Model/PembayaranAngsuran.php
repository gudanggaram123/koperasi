<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PembayaranAngsuran extends Model
{
    protected $table="tbl_produk";
    protected $primarykey="id";
    protected $fillable=[
           'id'           ,
           'id_transaksi',
           'tenor'        ,
           'jumlahbayar'  ,
           'tgl_pinjam'   ,
           'denda'        ,
           'created_at'   ,
           'updated_at'
    ];
}
