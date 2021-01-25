<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblNasabahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->id();
            $table->string('kd_nasabah',10)->nullable();
            $table->string('nama',30)->nullable();
            $table->string('username',10)->nullable();
            $table->string('email',30)->nullable();
            $table->string('password')->nullable();
            $table->enum('jkl', array('pria', 'wanita'));
            $table->string('no_hp',100)->nullable();
            $table->string('alamat',100)->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('no_ktp',100)->nullable();
            $table->enum('status',['1','0'])->default(1);
            $table->enum('status_brg',['1','0'])->default(1); 
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
        Schema::dropIfExists('nasabah');
    }
}
