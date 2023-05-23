<?php

namespace App\Models;

use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
  protected $fillable = ['name', 'type', 'base', 'toppings'];
  protected $casts=[ 
    'toppings' => 'array'
  ];
}