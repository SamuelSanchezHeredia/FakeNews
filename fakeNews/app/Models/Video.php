<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['videourl','button1','button2','videourloption1','videourloption2','resultText'];
    protected $table = 'videos';
}
