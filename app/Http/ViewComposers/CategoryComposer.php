<?php 

namespace App\Http\ViewComposers;

use Illuminate\View\View;

use App\Category;

class CategoryComposer{


    public function compose(View $view)
    {
        # code...
        $categories = Category::all();

        $view->with('categories', $categories);
    }

}