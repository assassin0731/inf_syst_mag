<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZayavInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zayav_infos', function (Blueprint $table) {
            $table->id();
            $table->string('org');
            $table->string('name');
            $table->string('tel');
            $table->string('email');
            $table->string('adr');
            $table->integer('inn');
            $table->integer('ogrn');
            $table->string('plat');
            $table->string('aim');
            $table->string('viezd');
            $table->string('metod');
            $table->string('vozvr');


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
        Schema::dropIfExists('zayav_infos');
    }
}
