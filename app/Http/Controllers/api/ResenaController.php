<?php

namespace App\Http\Controllers;

use App\Models\Resena;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ResenaController extends Controller
{
    public function create()
    {
        return view('resena.create');
    }

    public function store(Request $request)
    {
        $resena = new resena();
        $resena->qualification = $request->input('qualification');
        $resena->comment = $request->input('comment');
       
        $resena->save();
        return $resena;
    }

    public function index()
    {
        $resena = resena::orderBy('id', 'desc')->get();
        return view('resena.listar', compact('resena'));
    }
    public function show(resena $resena) {
        return view('resena.show', compact('resena'));
    }

    public function destroy(resena $resena) {
        $resena->delete();
        return redirect()->route('resena.index');
    }

    public function edit (resena $resena){
    
        return view ('resena.edit',compact('resena'));

    }

    public function update(Request $request,resena $resena ){

       
        $resena->qualification = $request->input('qualification');
        $resena->comment = $request->input('comment');
       
        $resena->save();
        return redirect()->route('resena.index');

    }
}
