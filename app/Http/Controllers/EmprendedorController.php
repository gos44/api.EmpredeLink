<?php

namespace App\Http\Controllers;
use App\Models\Emprendedor; 
use App\models\user;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmprendedorController extends Controller
{

    public function creates()
    {
        return view('emprender.emprendedor');
    }
    
    public function store(Request $request)
    { 
        $emprendedor = new Emprendedor();
        $emprendedor->name = $request->name;
        $emprendedor->lastname = $request->lastname;
        $emprendedor->fecha_nacimiento = $request->fecha_nacimiento;
        $emprendedor->password = $request->password;
        $emprendedor->telefono = $request->telefono;
        $emprendedor->imagen = $request->imagen;
        $emprendedor->correo = $request->correo;
        $emprendedor->ubicacion = $request->ubicacion;
        $emprendedor->numero = $request->numero;

        $emprendedor = User::all();
       
       
        return view('role_user.asociar',compact('users','roles'));
        $emprendedor->save();

        return redirect()->route('emprendedor.index');
    }

    public function index()
    {
        $emprendedores = Emprendedor::all();
        return view('emprender.listar', ['emprendedores' => $emprendedores]);
    }
    
    public function show(Emprendedor $emprendedor)
    {
        return view('emprender.show', compact('emprendedor'));
    }

    public function destroy(Emprendedor $emprendedor)
    {
        $emprendedor->delete();
        return redirect()->route('emprendedor.index');
    }

    public function edit(Emprendedor $emprendedor)
    {
        return view('emprender.edit', compact('emprendedor'));
    }

    public function update(Request $request, Emprendedor $emprendedor)
    {
        $emprendedor->name = $request->name;
        $emprendedor->lastname = $request->lastname;
        $emprendedor->fecha_nacimiento = $request->fecha_nacimiento;
        $emprendedor->password = $request->password;
        $emprendedor->telefono = $request->telefono;
        $emprendedor->imagen = $request->imagen;
        $emprendedor->correo = $request->correo;
        $emprendedor->ubicacion = $request->ubicacion;
        $emprendedor->numero = $request->numero;
        $emprendedor->save();
        return redirect()->route('emprendedor.index');
    }
    public function navigation()
    {
        return view('emprender.navigation');
    }

    
}
