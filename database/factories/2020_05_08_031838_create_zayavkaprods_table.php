<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZayavkaprodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zayavkaprods', function (Blueprint $table) {
            $table->id();
            $table->integer('id_zayav');
            $table->string('prodname');
            $table->string('act');
            $table->string('doc');
            $table->string('pokaz');

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
        Schema::dropIfExists('zayavkaprods');
    }
}
