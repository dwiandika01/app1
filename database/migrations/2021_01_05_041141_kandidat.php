<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kandidat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('kandidat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->text('visi');
            $table->text('misi');
            $table->string('foto');
            $table->integer('periode')->unsigned();
            $table->foreign('periode')->references('id')->on('periode')->onDelete('cascade');
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
        Schema::dropIfExists('kandidat');
    }
}
