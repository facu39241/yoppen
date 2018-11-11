<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlesRequest;
use Illuminate\Http\Request;
use App\Article;
use App\Provisioner;
use Illuminate\Support\Facades\Storage;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $provisioners = Provisioner::all();
        return view('articles.index')->with(['articles' => $articles, 'provisioners' => $provisioners ]);
    }
      
     public function store(ArticlesRequest $request) {

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
        return redirect()->to('articles');

     }
     /**Elimina el registro */

     public function destroy(article $article)
    {   
         $article->delete();

        return redirect('/articles'); 
    }

    /**Edita los articulos */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(article $article)
    {      
                $article->name = request()->name;
                $article->code = request()->code;
                $article->price = request()->price;
                $article->stock = request()->stock;
                $article->image = request()->image;
                $article->description = request()->description;
                
                $article->save();

                return redirect('/articles'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
