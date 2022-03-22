<?php

namespace App\Http\Controllers\dashboard;

use App\Models\order;
use App\Models\district;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Product;

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
        $orders =  order::where('states',null)->get();
        return view('home',compact('orders'));
    }//end of addOrder

    public function create(Client $client)
    {
        $district = district::all();
        $products = Product::orderBy('name','asc')->get();

        return view('dashboard.orders.create', compact('district','products','client'));
    } //end of creat

    public function store(Request $request)
    {
        return $request->all();
    } //end of store

    public function edit(order $order)
    {
        # code...
    } //end of edit

    public function update(Request $request, order $order)
    {
        return $request->all();
    } //end of update

    public function delete(order $order)
    {
        # code...
    } //end of delet
}
