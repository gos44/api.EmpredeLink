<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Publicar_Emprendimiento extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'last_name', 'phone_number', 'mail', 'description', 'location', 'url', 'date_exp'];

    protected $allowIncluded = ['emprendedores', 'emprendimiento'];
    protected $allowFilter = ['id', 'name', 'lastname', 'correo']; // Campos permitidos para filtrar.
    protected $allowSort = ['id', 'name', 'lastname', 'correo']; // Campos permitidos para ordenar.


    public function emprendimiento()
    {
        return $this->belongsTo(Emprendimiento::class);
    }

    public function emprendedores()
    {
        return $this->hasMany(Emprendedor::class);
    }

    public function scopeIncluded(Builder $query)
    {
        if (empty($this->allowIncluded) || empty(request('included'))) {
            return;
        }

        $relations = explode(',', request('included'));
        $allowIncluded = collect($this->allowIncluded);

        foreach ($relations as $key => $relationship) {
            if (!$allowIncluded->contains($relationship)) {
                unset($relations[$key]);
            }
        }

        $query->with($relations);
    }
}
