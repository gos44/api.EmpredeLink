<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crear_resenas extends Model
{
    use HasFactory;
    protected $fillable = ['qualification', 'comment']; //Campos que se van a asignacion masiva:
}
