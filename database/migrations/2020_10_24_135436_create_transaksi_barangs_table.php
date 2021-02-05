<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_barang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_nasabah');
            $table->foreignId('id_produk');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->double('hrg_sewa');
            $table->double('total_sewa');
            $table->double('denda')->nullable();
            $table->enum('status',['1','0'])->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_barang');
    }
}
