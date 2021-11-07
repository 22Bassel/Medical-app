<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class   illness extends Model
{
    use HasFactory;
    public $connection='mysql';
    public function symptom(){

        return $this->hasOne('App\Models\symptom');
    }
}
