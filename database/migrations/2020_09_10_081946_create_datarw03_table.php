<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatarw03Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datarw03', function (Blueprint $table) {
            $table->id();
            // $table->string('no_ktp', 30);
            $table->string('nama_warga', 30);
            $table->string('alamat', 50);
            $table->string('no_telepon', 12);
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
        Schema::dropIfExists('datarw03');
    }
}
