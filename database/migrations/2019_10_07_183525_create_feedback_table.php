<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback__c', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('acctNum');
            $table->string('name');
            $table->string('email');
            $table->integer('answer1');
            $table->integer('answer2');
            $table->integer('answer3');
            $table->integer('answer4');
            $table->integer('answer5');
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
        Schema::dropIfExists('feedback__c');
    }
}
