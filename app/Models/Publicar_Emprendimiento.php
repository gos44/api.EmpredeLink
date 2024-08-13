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


    protected $fillable = ['name', 'last_name','phone_number','mail','description','location','url','date_exp']; //Campos que se van a asignacion masiva:
    }

