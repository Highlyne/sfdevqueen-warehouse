<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
    protected $fillable = [
        'acctNum', 'email', 'name', 'answer1',
        'answer2', 'answer3', 'answer4', 'answer5'
    ];
}
