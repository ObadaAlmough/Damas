<?php

namespace App\Http\Controllers\dashboard;

use App\Models\delevery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class deleveryController extends Controller
{
    public function index(Request $request)
    {
        $deleverys = delevery::select('id','name')->get();
        return view('dashboard.delevery.index', compact('deleverys'));
    } //end of index

    public function create()
    {
        return view('dashboard.delevery.create');
    } //end of create

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',

        ]);

        $delevery = delevery::create($data);



        session()->flash('success', __('web.added_successfully'));




        return redirect(url('dashboard/delevery'));
    } //end of store

    public function edit(delevery $delevery)
    {
        return view('dashboard.delevery.edit', compact('delevery'));
    } //end of edit

    public function update(Request $request, delevery $delevery)
    {
        $request->validate([
            'name' => 'required',

        ]);

        $delevery->update(['name' => $request->name]);



        session()->flash('success', __('web.edited_successfully'));



        return redirect(url('dashboard/delevery'));
    } //end of update

    public function delete(delevery $delevery)
    {
        $delevery->delete();

        return back();
    } //end of delete

}
