<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduktivitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produktivitas', function (Blueprint $table) {
            $table->integer('tahun');
            $table->integer('kecamatan_id')->index('fk_luas_perkebunan_kecamatan_idx');
            $table->integer('tanaman_perkebunan_id')->index('fk_luas_perkebunan_tanaman_perkebunan1_idx');
            $table->double('nilai');
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['tahun', 'kecamatan_id', 'tanaman_perkebunan_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produktivitas');
    }
}
