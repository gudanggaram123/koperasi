<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranAngsuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_angsuran', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi');
            $table->double('tenor');
            $table->double('jumlahbayar');
            $table->date('tgl_pinjam');
            $table->double('denda');
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
        Schema::dropIfExists('pembayaran_angsuran');
    }
}
