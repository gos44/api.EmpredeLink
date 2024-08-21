<?php

namespace App\Http\Controllers\Api;
use App\Models\Conexion; 
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController; 


class ConexionController extends  RoutingController
{

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario_emprendedors=Conexion::all();
        
        return response()->json($usuario_emprendedors);
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
            'chat' => 'required|max:255',
            'emprendedors_id'=> 'require|exits:emprendedors,id',
            'inversionistas_id'=> 'require|exits:inversionistas,id',

        ]);
        
        $usuario_emprendedors = Conexion::create($request->all());

        return response()->json($usuario_emprendedors);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emprendedor  $Emprendedor
     * @return \Illuminate\Http\Response
     */
    public function show($id) //si se pasa $id se utiliza la comentada
    {  
        
       
        $usuario_emprendedors = Conexion::included()->findOrFail($id);
        return response()->json($usuario_emprendedors);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emprendedor  $Emprendedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conexion $usuario_emprendedors)
    {
        $request->validate([
        'chat' => 'required|max:255',
        'emprendedors_id'=> 'require|exits:emprendedors,id',
        'inversionistas_id'=> 'require|exits:inversionistas,id',$usuario_emprendedors->id,

        ]);

        $usuario_emprendedors->update($request->all());

        return response()->json($usuario_emprendedors);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conexion  $usuario_emprendedors)
    {
        $usuario_emprendedors->delete();
        return response()->json($usuario_emprendedors);
    }
}