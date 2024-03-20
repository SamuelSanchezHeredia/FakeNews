<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionImg extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['question','correct','realNew','img'];
    protected $table = 'question_img';
}
