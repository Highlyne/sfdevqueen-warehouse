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
            $table->integer('invite_number__c');
            $table->string('name');
            $table->string('customer_email__c');
            $table->integer('answer_1__c');
            $table->integer('answer_2__c');
            $table->integer('answer_3__c');
            $table->integer('answer_4__c');
            $table->integer('answer_5__c');
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
