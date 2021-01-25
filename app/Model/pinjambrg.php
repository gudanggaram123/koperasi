<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class pinjambrg extends Model
{
    protected $table="transaksi_barang"; 
    protected $fillable=[
         "id", "id_nasabah", "id_produk", "tgl_pinjam", "tgl_kembali", "hrg_sewa", "total_sewa", "denda", "status",
    ];
    
    public function nasabah()
    {
        return $this->belongsTo('App\Model\nasabah');
    }

}
