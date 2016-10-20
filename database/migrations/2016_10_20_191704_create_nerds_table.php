<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNerdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nerds', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('e_id');
            $table->string('f_name');
            $table->string('l_name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
    {
        Schema::dropIfExists('nerds');
    }
}
