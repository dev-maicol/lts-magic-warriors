<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Controls extends Model
{
    use HasFactory;
    protected $fillable = ['id_clan', 'action', 'date'];
}
