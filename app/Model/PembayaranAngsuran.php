<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PembayaranAngsuran extends Model
{
    protected $table="pembayaran_angsuran";
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
    
    public function nasabah(){
        
        return $this->hasOne('App\Model\PinjamUang',"id_transaksi","id_transaksi");
        
    }
}
