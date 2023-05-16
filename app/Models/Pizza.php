<?php

namespace App\Models;

use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
  // protected $table = 'table_name';
  protected $casts=[ 
    'toppings' => 'array'
  ];
}