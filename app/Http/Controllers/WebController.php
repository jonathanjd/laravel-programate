<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

use Carbon\Carbon;

use Illuminate\Support\Facades\Cache;

use  Illuminate\Pagination\LengthAwarePaginator;

class WebController extends Controller
{

    public function __construct()
    {
        # code...
        Carbon::setLocale('es');
    }


    //
    public function home(Request $request)
    {
        # code...
        if($request->buscar){
            Cache::pull('articles');
            $all = Cache::remember('buscar', 10, function () use($request) {
                return Article::buscar($request->buscar)->orderBy('id', 'desc')->get();
            });

        }else{

            Cache::pull('buscar');
            $all = Cache::remember('articles', 10, function () use($request) {
                return Article::buscar($request->buscar)->orderBy('id', 'desc')->get();
            });
            
        }
        
        $page = $request->input('page',1);
        $perPage = 5;

        $articles = new LengthAwarePaginator($all->forPage($page, $perPage), $all->count(), $perPage, $page);

        return view('web.home')
            ->with('articles', $articles);
    }

    public function contact()
    {
        # code...
        return view('web.contact');
    }    

    public function aboutMe()
    {
        # code...
        return view('web.about');

    }

    public function post($slug)
    {
        # code...
        $article = Cache::remember('post', 3, function () use($slug) {
            return Article::findBySlug($slug);
        });

        $myCache = Cache::get('post');

        if($myCache->slug != $slug){
            \Log::info('Estoy en el if');
            Cache::pull('post');
            $article = Cache::remember('post', 3, function () use($slug) {
                return Article::findBySlug($slug);
            });
        }


        return view('web.post')->with('article', $article);

    }

}
