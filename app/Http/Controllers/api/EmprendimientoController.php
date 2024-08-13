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
        $emprendimiento = Emprendimiento::all();
        return response()->json($emprendimiento);
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
        $emprendimiento = Emprendimiento::findOrFail($id);
        return response()->json($emprendimiento);
    }

    public function update(Request $request, Emprendimiento $emprendimiento)
    {
        $request->validate([
            'nombre_emprendimiento' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'especificaciones' => 'required|max:255',
            'categoria' => 'required|max:255'.$emprendimiento->id,
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
