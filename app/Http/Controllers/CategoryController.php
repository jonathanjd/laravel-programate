<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use Carbon\Carbon;

class CategoryController extends Controller
{
    
    /**
     * Iniciar Carbon Español
     */
    public function __construct()
    {
        # code...
        Carbon::setLocale('es');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::orderBy('id', 'desc')->paginate(5);
        return view('admin.categoria.index')
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $this->validate($request, [
           'name' => 'required|max:255'
       ]);

       $category = new Category($request->all());
       $category->save();

       flash('Datos Guardado')->success();

       return redirect()->route('category.show', $category);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $category = Category::findOrFail($id);
        return view('admin.categoria.show')->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::find($id);
        return view('admin.categoria.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);

        $category = Category::find($id);
        $category->fill($request->all());
        $category->save();

        flash('Datos Actualizados')->success();

        return redirect()->route('category.show', $category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::find($id);
        $category->delete();

        flash('Datos Eliminados')->success();

        return redirect()->route('category.index');
    }

    /**
     * Vista para Eliminar Categoría
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id)
    {
        # code...
        $category = Category::find($id);
        return view('admin.categoria.delete')->with('category', $category);
    }
}
