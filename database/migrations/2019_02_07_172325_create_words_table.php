<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('words', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('pile_id');
          $table->string('nor_word');
          $table->string('eng_word');
          $table->string('nor_sentence');
          $table->string('eng_sentence');
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
        Schema::dropIfExists('words');
    }
}
