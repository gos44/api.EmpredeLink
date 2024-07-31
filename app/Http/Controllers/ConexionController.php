<?php

namespace App\Http\Controllers;
use App\Models\Emprendedor;
use App\Models\Inversionista;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ConexionController extends Controller
{
    public function asociar()
    {
        $emprendedores = Emprendedor::all();
        $inversionistas = Inversionista::all();
        return view('Conexion.asociar', compact('emprendedores', 'inversionistas'));
    }

    public function store(Request $request)
    {

            $emprededores= Emprendedor::find($request->emprendedor_id);
            $emprededores->Inversionistas()->attach($request->inversionista_id);

            return 'Emprendedor e Inversionista asociados correctamente';

    }
}
