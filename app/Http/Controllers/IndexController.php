<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use Carbon\Carbon;
use App\Article;
use App\Payment;
use App\Client;



class IndexController extends Controller
{
    
    public function index()
    {
        $articlesAdd = Article::where( 'created_at', '>', Carbon::now()->subDays(7))->take(5)->get();
        
        $articles = Article::where('stock', '>', 0)->count();
        $clients = Client::count();
        
        $sale = Payment::selectRaw('SUM(amount)');
        
        return view('index.index')->with(['articles' => $articles, 'clients' => $clients, 'articlesAdd' => $articlesAdd]);
    }
}
