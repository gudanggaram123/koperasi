<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TransaksiBarang extends Model
{
    protected $table="transaksi_barang";
    protected $primarykey="id";
    protected $fillable=[
        'id',
        'id_nasabah',
        'id_produk',
        'tgl_pinjam',
        'tgl_kembali',
        'denda',
        'status',
        'created_at',
        'updated_at'

    ];
}
