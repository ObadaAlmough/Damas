<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::where(function ($q) use ($request) {

            return $q->when($request->search, function ($query) use ($request) {

                return $query->where('name', 'like', '%' . $request->search . '%');
            });
        })->latest()->paginate(6);
        return view('dashboard.products.index', compact('products'));
    } //end of index

    public function create()
    {
        return view('dashboard.products.create');
    } //end for create

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:1|max:15|unique:products,name',
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'price' => 'array|min:1',
            'price.' => 'integer',

        ]);

        $data = $request->all();
        $data['price'] = array_filter($request->price);
        Product::create($data);
        session()->flash('success', __('web.added_successfully'));


        return redirect(url('dashboard/product'));
    } //end for store

    public function edit(Product $product)
    {

        return view('dashboard.products.edit', compact('product'));
    } //end for edit

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => "required|string|min:1|max:15|unique:products,name,except,$product->id",
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'price' => 'array|min:1',
            'price.' => 'integer|defult:0',

        ]);

        $data = $request->all();
        $data['price'] = array_filter($request->price);

        $product->update($data);
        session()->flash('success', __('web.edited_successfully'));


        return redirect(url('dashboard/product'));
    } //end for updat

    public function delete(Product $product)
    {
        $product->delete();
        return back();
    } //end for delete
}
