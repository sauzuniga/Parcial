<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return\Illuminate\Http\Response
     */
    public function index()
    {
        $productos= Productos::latest()->paginate(5);
        return view("productos.index", compact("productos"))
        ->with("i",(request()->input("page",1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return Response
     */
    public function show(id)
    {
        $productos=Productos::find($id);
        return view("productos.show", compact("productos"));
    }

    /**
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $productos=Productos::find($id);
        return view("productos.edit", compact("productos"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $productos)
    {
        //
    }
}
