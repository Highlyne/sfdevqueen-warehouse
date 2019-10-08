<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback__c extends Model
{
    //
    protected $table = 'feedback__c';
    public $timestamps = false;
    protected $fillable = [
        'acctNum', 'email', 'name', 'answer1',
        'answer2', 'answer3', 'answer4', 'answer5'
    ];
}
