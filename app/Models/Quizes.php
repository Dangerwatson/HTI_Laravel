<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizes extends Model
{
    protected $fillable=['quiz_name','description','quiz_time','quiz_date','status','number_of_question'];
}
