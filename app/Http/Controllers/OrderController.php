<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Provisioner;
use App\Article;
use App\Order;


class OrderController extends Controller
{
    public function index()
    {

        $provisioners=Provisioner::all();
        $articles = Article::all();
        $orders = Order::all();

        return view('order.index')->with(['articles' => $articles, 'provisioners' => $provisioners, 'orders' => $orders]);;
    }
    
    public function update(Request $request)
    {
        $index = 0;
        
        foreach ($request->id as $id){
            $article = Article::find($id);
            $article->stock = $request->quantity[$index] + $article->stock;
            $index++;
            $article->save();
            return redirect()->to('orders');
        }
    }

    public function create($array)
    {
        //
    }

    public function ajax(Request $request){
        
        $articlesForProvisioner = Article::where('provisioner_id', $request->id)->get();
        return json_encode($articlesForProvisioner);

    }
    
    public function store(Request $request)
    {
        
        $order = new Order;
        $order->fill(
            $request->only(
                'provisioner_id',
            )
        );
        $order->save();
        
        return redirect()->to('orders');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    

    
    public function destroy($id)
    {
        //
    }
}
