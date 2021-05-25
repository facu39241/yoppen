<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use Carbon\Carbon;
use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
        $articles = Article::where('web', '=', 1);

        // return view('index')->with([
        //     'articles' => $articles, 
        //     ]);
    }
}
