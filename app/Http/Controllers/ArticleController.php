<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

use App\Image;

use App\Category;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::orderBy('id', 'desc')->paginate(5);

        return view('admin.articulo.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::orderBy('id', 'desc')->pluck('name', 'id');
        return view('admin.articulo.create')->with('categories', $categories);
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
            'title' => 'required|max:255',
            'content' => 'required|max:2550',
            'categories_id' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('image')) {
            # code...
            $file = $request->file('image');
            $name = $request->title . '-' . time() . '.' . $file->getClientOriginalExtension();
            $request->file('image')->storeAs('articles/', $name, 'uploads');
        }else{
        
        }

        $article = new Article($request->all());
        $article->users_id = Auth::user()->id;
        $article->save();

        $image = new Image();
        $image->name = $name;
        $image->article()->associate($article);
        $image->save();

        flash('Datos Registrados')->success();

        return redirect()->route('article.show', $article);

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
        $article = Article::find($id);
        return view('admin.articulo.show')->with('article', $article);
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
        $article = Article::find($id);
        $categories = Category::orderBy('id', 'desc')->pluck('name', 'id');
        return view('admin.articulo.edit')
            ->with('article', $article)
            ->with('categories', $categories);
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
            'title' => 'required|max:255',
            'content' => 'required|max:2550',
            'categories_id' => 'required',
            'image' => 'mimes:jpg,jpeg,png'
        ]);

        $article = Article::find($id);

        if ($request->hasFile('image')) {
            # code...
            $file = $request->file('image');
            $name = $request->title . '-' . time() . '.' . $file->getClientOriginalExtension();
            $request->file('image')->storeAs('articles/', $name, 'uploads');

            $article->fill($request->all());
            $article->users_id = Auth::user()->id;
            $article->image->name = $name;
            $article->slug = null;
            $article->image->save();
            $article->save();
        }else{
            
            $article->fill($request->all());
            $article->users_id = Auth::user()->id;
            $article->slug = null;
            $article->save();
        }

        flash('Datos Actualizados')->success();

        return redirect()->route('article.show', $article);
    }


    public function delete($id)
    {
        # code...
        $article = Article::find($id);
        return view('admin.articulo.delete')->with('article', $article);
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
        $article = Article::find($id);
        $article->delete($id);
        flash('Datos Eliminados')->success();
        return redirect()->route('article.index');
    }
}
