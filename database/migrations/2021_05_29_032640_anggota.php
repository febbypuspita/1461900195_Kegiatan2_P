<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Anggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota',function (Blueprint $table) {
            $table->increments('anggota_id');
            $table->string('anggota_nama', 50);
            $table->text('anggota_alamat');
            $table->string('anggota_jk', 20);
            $table->string('anggota_tlp', 20);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota');
    }
}
