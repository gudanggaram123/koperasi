<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PinjamUang extends Model
{
    protected $table="transaksi_pinjam_uang";
    protected $primarykey="id";
    protected $fillable=[
        'id',
        'id_transaksi',
        'id_nasabah',
        'tgl_pinjam', 
        'tgl_kembali', 
        'jaminan', 
        'jumlah_pinjaman', 
        'bayar_perbulan', 
        'bunga', 
        'tenor', 
        'status', 
        'created_at', 
        'updated_at' 
    ];
    
    public function nasabah(){
        
        return $this->hasOne('App\Model\nasabah',"id","id_nasabah");
        
    }
}
