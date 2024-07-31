<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Publicar_Emprendimiento;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class PublicarEmprendimientoController extends RoutingController
{
    public function create()
    {
        return view('trabajo.tabla');
    }

    public function store(Request $request)
    {
        $trabajo = new Publicar_Emprendimiento();
        $trabajo->name = $request->input('name');
        $trabajo->last_name = $request->input('last_name');
        $trabajo->phone_number = $request->input('phone_number');
        $trabajo->mail = $request->input('mail');
        $trabajo->description = $request->input('description');
        $trabajo->location = $request->input('location');
        $trabajo->url = $request->input('url');
        $trabajo->date_exp = $request->input('date_exp');
        $trabajo->save();
        
        return $trabajo;
    }

    public function index()
    {
        $trabajos = Publicar_Emprendimiento::orderBy('id', 'desc')->get();
        return view('trabajo.listar', compact('trabajos'));
    }

    public function show(Publicar_Emprendimiento $trabajo) {
        return view('trabajo.show', compact('trabajo'));
    }

    public function destroy(Publicar_Emprendimiento $trabajo) {
        $trabajo->delete();
        return redirect()->route('trabajo.index');
    }

    public function edit (Publicar_Emprendimiento $trabajo){
    
        return view ('trabajo.edit',compact('trabajo'));

    }

    public function update(Request $request,Publicar_Emprendimiento $trabajo ){

       
        $trabajo->name = $request->input('name');
        $trabajo->last_name = $request->input('last_name');
        $trabajo->phone_number = $request->input('phone_number');
        $trabajo->mail = $request->input('mail');
        $trabajo->description = $request->input('description');
        $trabajo->location = $request->input('location');
        $trabajo->url = $request->input('url');
        $trabajo->date_exp = $request->input('date_exp');
        $trabajo->save();
        return redirect()->route('trabajo.index');

    }
}
