<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pemilih extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pemilih', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 11)->unique();
            $table->integer('periode')->unsigned();
            $table->foreign('periode')->references('id')->on('periode')->onDelete('cascade');
            $table->integer('status')->unsigned();
            $table->foreign('status')->references('id')->on('tbl_status')->onDelete('cascade');
            $table->integer('jumlahsuara')->unsigned();
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
        //
        Schema::dropIfExists('pemilih');
    }
}
