<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
    // Set table name:
    protected $table = 'greeting';
    
    use HasFactory;
}
