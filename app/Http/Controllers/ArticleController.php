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
                'description',
                'image'
            )
        );

        $article->save();
        $article->categories()->attach($request->category_id);

        return redirect()->to('articles');
    }
    /**Elimina el registro */

    public function destroy(article $article)
    {
        $article->delete();

        return redirect('/articles');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(article $article)
    {
        $article->name = request()->name;
        $article->code = request()->code;
        $article->price = request()->price;
        $article->stock = request()->stock;
        $article->image = request()->image;
        $article->description = request()->description;

        $article->save();
        $article->categories()->sync(request()->category_id);
        return redirect('/articles');
    }

}
