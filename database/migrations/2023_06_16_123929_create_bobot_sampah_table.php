<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBobotSampahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bobot_sampah', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->float('sampah_plastik');
            $table->float('sampah_kertas');
            $table->float('sampah_kaleng');
            $table->float('total_sampah');
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
        Schema::dropIfExists('bobot_sampah');
    }
}
