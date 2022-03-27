<?php

namespace App\Http\Controllers\dashboard\order;

use App\Http\Controllers\Controller;
use App\Models\delevery;
use App\Models\order;
use Illuminate\Http\Request;

class deleveryController extends Controller
{

    public function index(delevery $delevery)
    {
    $orders = order::where('states','equip')->get();
    $orders_Delevery = order::where('delevery_id', $delevery->id)->get();
    return view('dashboard.orders.delevery.index', compact('orders','delevery','orders_Delevery'));
    }//end of index



    public function show(delevery $delevery,Request $request)
    {
        $orders = order::whereHas('client' , function ($q) use ($request){
            return $q->where('name' , 'like' , '%' . $request->search . '%')
            ->orwhere('phone' , 'like' , '%' . $request->search . '%')
            ->orwhere('Building' , 'like' , '%' . $request->search . '%')
            ->orwhere('flat' , 'like' , '%' . $request->search . '%');
        })->where('states','equip')->get();


    return view('dashboard.orders.delevery._show', compact('orders','delevery'));
    }//end of show



    public function add_order(delevery $delevery,order $order)
    {

        $order->update(['delevery_id' => $delevery->id,'states' => 'delevery']);
        $orders_Delevery = order::where('delevery_id', $delevery->id)->get();


    return view('dashboard.orders.delevery._add_order',compact('orders_Delevery','delevery'));
    }//end of show\

    public function delete(delevery $delevery,order $order)
    {

        $orders = order::where('states','equip')->get();
        $order->update(['delevery_id' => NULL ,'states' => 'equip']);


        return view('dashboard.orders.delevery._show', compact('orders','delevery'));


    }//end of delete


}
