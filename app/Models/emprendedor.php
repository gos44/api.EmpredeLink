<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class emprendedor extends Model

{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function Inversionistas()
    {
        return $this->belongsToMany(Inversionista::class);
    }

    public function publicar_emprendimiento (){
        return $this->belongsTo(publicar_emprendimiento::class);
    }
}
