<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class emprendimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_emprendimiento', 'descripcion', 'especificaciones', 'categoria'
    ];

    protected $allowIncluded = [
        'inversionista', 'emprendedor', 'publicar_emprendimientos', 'crear_resenas'
    ];

    protected $allowFilter = ['id', 'nombre_emprendimiento', 'categoria'];

    protected $allowSort = ['id', 'nombre_emprendimiento', 'categoria'];

    // Relaciones

    public function emprendedor()
    {
        return $this->belongsTo(Emprendedor::class);
    }

    public function Publicar_Emprendimientos()
    {
        return $this->belongsTo(Publicar_Emprendimiento::class);
    }

    public function inversionista()
    {
        return $this->belongsTo(Inversionista::class);
    }

    public function crear_resenas()
    {
        return $this->hasMany(Crear_resenas::class);
    }


    // Scope para incluir relaciones
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

    // Scope para filtrar resultados
    public function scopeFilter(Builder $query)
    {
        if (empty($this->allowFilter) || empty(request('filter'))) {
            return;
        }

        $filters = request('filter');
        $allowFilter = collect($this->allowFilter);

        foreach ($filters as $filter => $value) {
            if ($allowFilter->contains($filter)) {
                $query->where($filter, 'LIKE', '%' . $value . '%');
            }
        }
    }

    // Scope para ordenar resultados
    public function scopeSort(Builder $query)
    {
        if (empty($this->allowSort) || empty(request('sort'))) {
            return;
        }

        $sortFields = explode(',', request('sort'));
        $allowSort = collect($this->allowSort);

        foreach ($sortFields as $sortField) {
            $direction = 'asc';

            if (substr($sortField, 0, 1) == '-') {
                $direction = 'desc';
                $sortField = substr($sortField, 1);
            }

            if ($allowSort->contains($sortField)) {
                $query->orderBy($sortField, $direction);
            }
        }
    }

    // Scope para obtener todos los registros o paginarlos
    public function scopeGetOrPaginate(Builder $query)
    {
        if (request('perPage')) {
            $perPage = intval(request('perPage'));

            if ($perPage) {
                return $query->paginate($perPage);
            }
        }

        return $query->get();
    }
}
