<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['ya','tidak','hasil'];
    protected $table = 'forms';
}
