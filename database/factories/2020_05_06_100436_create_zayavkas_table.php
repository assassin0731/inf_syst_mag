<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZayavkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zayavkas', function (Blueprint $table) {
          $table->id();
          $table->integer('id_user');
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
        Schema::dropIfExists('zayavkas');
    }
}
