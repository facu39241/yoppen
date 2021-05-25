<?php

namespace App\Http\Controllers;

use Auth;
use App\Client; 
use App\Article; 
use App\Payment; 
use App\DetailPayment; 
use Illuminate\Http\Request;
use MercadoPago\SDK;
use MercadoPago\Preference;
use MercadoPago\Item;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::select(['id','name','code','price'])->get();
        return view('payment.index', ['articles' => $articles]);
    }

    public function SearchClientByDni($dni)
    {
        $client = Client::where(['dni' => $dni])->get();
        return response($client); 
    }

    public function checkout(Request $request)
    {
        $data = json_decode($request->data);
       
        $payment = PaymentController::newPayment($data);
        $detailPayment = PaymentController::newDetailPayment($data, $payment->id);

        SDK::setAccessToken(env('MP_ACCESS_TOKEN'));
        // Crea un objeto de preferencia
        $preference = new Preference();
        // Crea un ítem en la preferencia
        $item = new Item();
        $item->title = 'Venta en yoppen';
        $item->quantity = 1;
        $item->unit_price = $payment->amount;
        $preference->items = array($item);
        $preference->save();

        $client = Client::find($data->clientId);
        $detailPayments = DetailPayment::where('payment_id', $payment->id )->get();
        return view("payment.checkout", [
                                            'preference' => $preference, 
                                            'client' => $client, 
                                            'detailPayments' => $detailPayments,
                                            'paymentAmount' => $payment->amount
                                        ]);

    }

    static function newPayment($data){
        $amount = 0;
        $i = 0;
        $articles = Article::findMany($data->articles);
        foreach ($articles as $article) {
            $amount += $article->price * $data->articlesQuantity[$i];
            $i++;
        }
        $payment = new Payment;
        $payment->user_id = Auth::user()->id;
        $payment->client_id = $data->clientId;
        $payment->type = 'Pending';
        $payment->code = date("mdhis");
        $payment->date = date("Y-m-d h:i:s");
        $payment->amount = $amount;
        $payment->save();
        return $payment;
    }

    static function newDetailPayment($data, $paymentId){
        $i = 0;
        $articles = Article::findMany($data->articles);
        foreach ($articles as $article) {
            $detailPayment = new DetailPayment;
            $detailPayment->payment_id = $paymentId;
            $detailPayment->name = $article->name;
            $detailPayment->code = $article->code;
            $detailPayment->quantity = $data->articlesQuantity[$i];
            $detailPayment->price = $article->price;
            $detailPayment->save();
            $i++;
        }
        return $detailPayment;
    }
}
