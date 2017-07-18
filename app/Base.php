<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    protected $fillable = ['nombre', 'autor','anio'];
}
