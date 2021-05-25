<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlesRequest;
use Illuminate\Http\Request;
use App\Article;
use App\Provisioner;
use App\Category;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $provisioners = Provisioner::all();
        $categories = Category::all();
        return view('articles.index')->with(['articles' => $articles, 'provisioners' => $provisioners, 'categories' => $categories]);
    }

    public function store(ArticlesRequest $request)
    {

        $article = new Article;
        $article->fill(
            $request->only(
                'provisioner_id',
                'name',
                'code',
                'price',
                'stock',
                'description'
            )
        );
        
        if ($request->web == 'true') {
            $article->web = 1;
        }else {
            $article->web = 0;
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path() . "/img_product/", $name);
            $article->image = $name;
        }
        
        $article->save();
        $article->categories()->attach($request->category_id);

        return redirect()->to('articles');
    }


    public function destroy(article $article)
    {
        $article->delete();

        return redirect('/articles');
    }

    public function update(article $article)
    {
        $article->name = request()->name;
        $article->code = request()->code;
        $article->price = request()->price;
        $article->stock = request()->stock;
        $article->image = request()->image;
        $article->description = request()->description;
        
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path() . "/img_product/", $name);
            $article->image = $name;
        }
        if (request()->web == 'true') {
            $article->web = 1;
        }else {
            $article->web = 0;
        }

        $article->save();
        $article->categories()->sync(request()->category_id);
        return redirect('/articles');
    }
    
    public function ajax(Request $request){
        
        $articlesForWeb = Article::where('web', '=', 1)->get();
        return json_encode($articlesForWeb);

    }

}
