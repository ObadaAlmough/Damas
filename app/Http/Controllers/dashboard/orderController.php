<?php

namespace App\Http\Controllers\dashboard;

use App\Models\order;
use App\Models\Client;
use App\Models\Product;
use App\Models\district;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class orderController extends Controller
{
    public function index(Request $request)
    {
        $orders = order::where(function ($q) use ($request) {

            return $q->when($request->search, function ($query) use ($request) {

                return $query->where('name', 'like', '%' . $request->search . '%');
            });
        })->latest()->paginate(6);
        return view('dashboard.orders.index', compact('orders'));
    } //end of index

    public function addOrder(Request $request)
    {
        order::create($request->all());
        $orders =  order::where('states', null)->get();
        return view('home', compact('orders'));
    } //end of addOrder

    public function create(Client $client, order $order)
    {
        $district = district::all();
        $products = Product::orderBy('name', 'asc')->get();

        return view('dashboard.orders.create', compact('district', 'products', 'client', 'order'));
    } //end of creat



    public function store(Request $request)
    {
        $request->validate([
            'products' => 'required|array',
            'quantity' => 'required|array',
            'price' => 'required|array',
            'map' => 'required|array',
        ]);

        $total_price = 0;
        $order = $request->order;
        $order = order::findOrFail($order);
        for ($i = 0; $i < count($request->products); $i++) {
            $order->products()->attach($request->products[$i], ['quantity' => $request->quantity[$i],
             'price' => $request->price[$i], 'map' => $request->map[$i]]);
            $total_price += $request->price[$i] * $request->quantity[$i];
        }



        $order->update([
            'total_price' => $total_price,
            'states' => 'equip',

        ]);

        $orders =  order::where('states', null)->get();
        return view('home', compact('orders'));
    } //end of store



    public function edit(Client $client, order $order)
    {


            $data['maps_order'] = array() ;


            foreach( $order->products as $product){

                if ($product->pivot->map == 'landry') {
                    # code...
                    array_push($data['maps_order'],"landry");

                }elseif( $product->pivot->map == 'iron'){

                    array_push($data['maps_order'],"iron");

                }else{
                    array_push($data['maps_order'],"other");
                }
            };
        /* end of foreach find map */
        $district = district::all();
        $products = Product::orderBy('name', 'asc')->get();
        return view('dashboard.orders.edit', compact('district', 'products', 'client', 'order'))->with($data);
    } //end of edit

    public function update(Request $request, order $order)
    {
        return $request->all();
    } //end of update

    public function delete(order $order)
    {
        $order->products()->detach();
        $order->delete();
        return back();

    } //end of delet

    public function products(Client $client,Order $order)
    {
        return view('dashboard.orders._product',compact('order','client'));
    }
}
