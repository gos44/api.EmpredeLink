<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emprendedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'lastname', 'fecha_nacimiento', 'password', 'telefono', 'imagen', 'correo', 'ubicacion', 'numero'
    ];

    public function emprendimientos()
    {
        return $this->hasMany(Emprendimiento::class);
    }

    public function resenas()
    {
        return $this->hasMany(Resena::class);
    }

    public function usuarios_emprendedors()
    {
        return $this->hasMany(Usuarios_emprendedor::class);
    }

    public function publicar_Emprendimientos()
    {
        return $this->hasMany(Publicar_Emprendimiento::class);
    }

    public function usuarios_invercionistas()
    {
        return $this->hasMany(Usuarios_invercionista::class);
    }

    public function inversionistas()
    {
        return $this->belongsToMany(Inversionista::class);
    }
}
