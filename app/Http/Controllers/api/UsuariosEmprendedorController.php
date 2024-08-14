<?php

namespace App\Http\Controllers\Api;
use App\Models\usuarios_emprendedor; 
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; 


class UsuariosEmprendedorController extends  Controller
{

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios_emprendedors=usuarios_emprendedor::all();
        
        return response()->json($usuarios_emprendedors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'emprendedors_id'=> 'require'|'exits:emprendedors','id',
            'inversionistas_id'=> 'require'|'exits:inversionistas','id',

        ]);
        
        $usuarios_emprendedors = usuarios_emprendedor::create($request->all());

        return response()->json($usuarios_emprendedors);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emprendedor  $Emprendedor
     * @return \Illuminate\Http\Response
     */
    public function show($id) //si se pasa $id se utiliza la comentada
    {  
        
       
        $usuarios_emprendedors = usuarios_emprendedor::included()->findOrFail($id);
        return response()->json($usuarios_emprendedors);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emprendedor  $Emprendedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuarios_emprendedor $usuarios_emprendedors)
    {
        $request->validate([
          'emprendedors_id'=> 'require'|'exits:emprendedors','id',
            'inversionistas_id'=> 'require'|'exits:inversionistas','id',$usuarios_emprendedors->id,

        ]);

        $usuarios_emprendedors->update($request->all());

        return response()->json($usuarios_emprendedors);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuarios_emprendedor  $usuarios_emprendedors)
    {
        $usuarios_emprendedors->delete();
        return response()->json($usuarios_emprendedors);
    }
}