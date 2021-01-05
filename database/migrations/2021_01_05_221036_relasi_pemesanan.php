<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelasiPemesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemesanantiket', function (Blueprint $table) {
            $table->foreign('harga_id', 'id_harga')->references('id')->on('harga')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('user_id', 'id_user')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            // $table->foreign('id_user', 'ca_farmerfk_1')->references('id')->on('users');
            // $table->foreign('id_alamat', 'ca_farmerfk_2')->references('id_alamat')->on('alamat')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('id_harga');
        });
    }
}
