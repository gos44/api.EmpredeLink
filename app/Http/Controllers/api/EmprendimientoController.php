<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Emprendimiento;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class EmprendimientoController extends RoutingController
{
    public function index()
    {
        $emprendimientos = Emprendimiento::all(); 
        // Puedes usar filtros, ordenamientos, etc. como se muestra en los ejemplos comentados:
        // $emprendimientos = Emprendimiento::included()->get();
        // $emprendimientos = Emprendimiento::included()->filter();
        // $emprendimientos = Emprendimiento::included()->filter()->sort()->get();
        // $emprendimientos = Emprendimiento::included()->filter()->sort()->getOrPaginate();

        return response()->json($emprendimientos);
    }

    public function create()
    {
        return view('Emprendimiento.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_emprendimiento' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'especificaciones' => 'required|max:255',
            'categoria' => 'required|max:255',
        ]);

        $emprendimiento = Emprendimiento::create($request->all());
        return response()->json($emprendimiento);
    }

    public function show($id)
    {
        // Se pueden incluir relaciones en la consulta, como se muestra en los ejemplos comentados:
        // $emprendimiento = Emprendimiento::with(['relacion1', 'relacion2'])->findOrFail($id);
        // $emprendimiento = Emprendimiento::included()->findOrFail($id);

        $emprendimiento = Emprendimiento::findOrFail($id);
        return response()->json($emprendimiento);
        // Ejemplo de ruta: http://api.ejemplo.test/v1/emprendimientos/1/?included=relacion1,relacion2
    }

    public function edit(Emprendimiento $emprendimiento)
    {
        return view('Emprendimiento.edit', compact('emprendimiento'));
    }

    public function update(Request $request, Emprendimiento $emprendimiento)
    {
        $request->validate([
            'nombre_emprendimiento' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'especificaciones' => 'required|max:255',
            'categoria' => 'required|max:255',
        ]);

        $emprendimiento->update($request->all());
        return response()->json($emprendimiento);
    }

    public function destroy(Emprendimiento $emprendimiento)
    {
        $emprendimiento->delete();
        return response()->json(null, 204);
    }
}

