<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{
    use HasFactory;

    //modelos de resenas "reviews" en el otro proyecto

    public function emprendedor (){
        return $this->belongsTo(Emprendedor::class);
    }

    public function inversionista (){
        return $this->belongsTo(Inversionista::class);
    }

    protected $fillable = ['qualification', 'comment']; //Campos que se van a asignacion masiva:
}

