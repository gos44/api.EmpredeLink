<?php

namespace App\Http\Controllers;

use App\Models\Inversionista;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class InversionistaController extends Controller
{
    public function index()
    {
        $inversionistas = Inversionista::orderBy('id', 'desc')->get();
        return view('registrosL', compact('inversionistas'));
    }

    public function create()
    {
        return view('inversionistaC');
    }

    public function store(Request $request)
    {
        $inversionista = new Inversionista();
        $inversionista->name = $request->name;
        $inversionista->lastname = $request->lastname;
        $inversionista->Nacimiento = $request->Nacimiento;
        $inversionista->telefono = $request->telefono;
        $inversionista->contraseña = $request->contraseña;
        $inversionista->correo = $request->correo;
        $inversionista->ubicacion = $request->ubicacion;

        $inversionista->save();

        return redirect()->route('inversionistas.index');
    }

    public function destroy(Inversionista $inversionista)
    {
        $inversionista->delete();
        return redirect()->route('inversionistas.index');
    }

    public function show(Inversionista $inversionista)
    {
        return view('show', compact('inversionista'));
    }
    public function edit (inversionista $inversionista){

        return view('edit',compact('inversionista'));

    }
    public function update(Request $request,inversionista $inversionista ){
        
        $inversionista->name = $request->name;
        $inversionista->lastname = $request->lastname;
        $inversionista->Nacimiento = $request->Nacimiento;
        $inversionista->telefono = $request->telefono;
        $inversionista->contraseña = $request->contraseña;
        $inversionista->correo = $request->correo;
        $inversionista->ubicacion = $request->ubicacion;
        $inversionista->save();
        return redirect()->route('inversionistas.index');

    }
}
