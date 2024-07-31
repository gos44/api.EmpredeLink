<?php

namespace App\Http\Controllers;
use App\Models\Emprendimiento;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmprendimientoController extends Controller
{
    public function creates()
    {
        return view('emprender.emprendimiento');
    }

    public function store(Request $request)
    {
        $emprendimiento = new Emprendimiento();
        $emprendimiento->nombre_emprendimiento = $request->nombre_emprendimiento;
        $emprendimiento->descripcion = $request->descripcion;
        $emprendimiento->especificaciones = $request->especificaciones;
        $emprendimiento->categoria = $request->categoria;
        $emprendimiento->save();
        return redirect()->route('emprendimientos.index');
    }

    public function index()
    {
        $emprendimientos = Emprendimiento::all();
        return view('emprender.listar2', ['emprendimientos' => $emprendimientos]);

        
    }

    public function show(Emprendimiento $emprendimiento)
    {
        return view('emprender.show2', compact('emprendimiento'));
    }

    public function destroy(Emprendimiento $emprendimiento)
    {
        $emprendimiento->delete();
        return redirect()->route('emprendimientos.index');
    }

    public function edit(Emprendimiento $emprendimiento)
    {
        return view('emprender.edit2', compact('emprendimiento'));
    }

    public function update(Request $request, Emprendimiento $emprendimiento)
    {
        $emprendimiento->nombre_emprendimiento = $request->nombre_emprendimiento;
        $emprendimiento->descripcion = $request->descripcion;
        $emprendimiento->especificaciones = $request->especificaciones;
        $emprendimiento->categoria = $request->categoria;
        $emprendimiento->save();
        return redirect()->route('emprendimientos.index');
    }
}
