<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProduktivitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produktivitas', function (Blueprint $table) {
            $table->foreign('kecamatan_id', 'fk_luas_perkebunan_kecamatan00')->references('id')->on('kecamatan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('tanaman_perkebunan_id', 'fk_luas_perkebunan_tanaman_perkebunan100')->references('id')->on('tanaman')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produktivitas', function (Blueprint $table) {
            $table->dropForeign('fk_luas_perkebunan_kecamatan00');
            $table->dropForeign('fk_luas_perkebunan_tanaman_perkebunan100');
        });
    }
}
