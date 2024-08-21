<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios_invercionistas extends Model
{
    use HasFactory;
    // protected $primaryKey = "id_usuario_invercionistas";
    protected $fillable = ['inversionistas_id','emprendedors_id']; 
}
