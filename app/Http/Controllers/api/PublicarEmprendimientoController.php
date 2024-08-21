<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Publicar_Emprendimiento;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class PublicarEmprendimientoController extends RoutingController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $publicar_emprendimiento=Publicar_Emprendimiento::all();
        $publicar_emprendimiento = Publicar_Emprendimiento::included()->get();
        // $categories=Category::included()->filter();
        // $categories=Category::included()->filter()->sort()->get();
        // $categories=Category::included()->filter()->sort()->getOrPaginate();
        return response()->json($publicar_emprendimiento);
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
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'mail' => 'required|max:255',
            'description' => 'required|max:255',
            'location' => 'required|max:255',
            'url' => 'required|max:255',
            'date_exp' => 'required|max:255',


        ]);

        $publicar_emprendimiento = Publicar_Emprendimiento::create($request->all());

        return response()->json($publicar_emprendimiento);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id) //si se pasa $id se utiliza la comentada
    {  
        
       // $category = Category::findOrFail($id);
        // $category = Category::with(['posts.user'])->findOrFail($id);
        // $category = Category::with(['posts'])->findOrFail($id);
        // $category = Category::included();
        $publicar_emprendimiento = Publicar_Emprendimiento::included()->findOrFail($id);
        return response()->json($publicar_emprendimiento);
        //http://api.codersfree1.test/v1/categories/1/?included=posts.user

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicar_Emprendimiento $publicar_emprendimiento)
    {
        $request->validate([
           'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'mail' => 'required|max:255',
            'description' => 'required|max:255',
            'location' => 'required|max:255',
            'url' => 'required|max:255',
            'date_exp' => 'required|max:255' . $publicar_emprendimiento->id,

        ]);

        $publicar_emprendimiento->update($request->all());

        return response()->json($publicar_emprendimiento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicar_Emprendimiento $publicar_emprendimiento)
    {
        $publicar_emprendimiento->delete();
        return response()->json($publicar_emprendimiento);
    }
}
