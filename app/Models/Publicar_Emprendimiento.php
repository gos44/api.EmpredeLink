<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicar_Emprendimiento extends Model
{
    use HasFactory;
    public function emprendedors (){
        return $this->hasMany(emprendedor::class);
    }
    }

