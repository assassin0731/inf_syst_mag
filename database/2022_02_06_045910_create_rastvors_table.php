<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRastvorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rastvors', function (Blueprint $table) {
            $table->id();
            $table->integer('id_otdel');
            $table->string('name');
            $table->date('date');
            $table->string('method');
            $table->integer('kolvo');
            $table->integer('cons');
            $table->float('coef');
            $table->date('dategod');
            $table->integer('id_table');
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
        Schema::dropIfExists('rastvors');
    }
}
