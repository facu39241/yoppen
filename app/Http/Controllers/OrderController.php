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
    

    public function create()
    {
        //
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

    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
