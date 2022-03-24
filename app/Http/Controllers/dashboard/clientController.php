<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\district;

class clientController extends Controller
{
    public function index(Request $request)
    {
    $district = district::all();

        $clients = Client::where(function ($q) use ($request) {

            return $q->when($request->search, function ($query) use ($request) {

                return $query->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('Building', 'like', '%' . $request->search . '%')
                    ->orWhere('flat', 'like', '%' . $request->search . '%');
            });
        })->when($request->district_id,function ($q) use ($request) {
            $q->where('district_id',$request->district_id);
        })->latest()->paginate(6);
        return view('dashboard.clients.index', compact('clients','district'));
    } //end of index

    public function create()
    {
        $district = district::all();
        return view('dashboard.clients.create', compact('district'));
    } //end of creat

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|min:1|max:15',
            "phone" =>  "nullable|string",
            "deliver_notes" =>  'nullable|string',
            "work_notes" =>  'nullable|string',
            "condition" =>  'nullable|string',
            "Building" =>  "nullable|string",
            "flat" =>  "nullable|string",
            "nearest_landmark" =>  "nullable|string",
            "district_id" =>  'nullable|string'
        ]);
        Client::create($request->all());
        session()->flash('success', __('web.added_successfully'));

        return redirect(url('dashboard/client'));
    } //end of store

    public function edit(Client $client)
    {
        $district = district::all();


        return view('dashboard.clients.edit', compact('client','district'));
    } //end of edit

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'nullable|string|min:1|max:15',
            "phone" =>  "nullable|string",
            "deliver_notes" =>  'nullable|string',
            "work_notes" =>  'nullable|string',
            "condition" =>  'nullable|string',
            "Building" =>  "nullable|string",
            "flat" =>  "nullable|string",
            "nearest_landmark" =>  "nullable|string",
            "district_id" =>  'nullable|string',
            "landry" =>  'nullable|string',

        ]);

        $client->update($request->all());
        session()->flash('success', __('web.edited_successfully'));


        return redirect(url('dashboard/client'));
    } //end of update

    public function delete(Client $client)
    {
        $client->delete();
        return back();
    } //end for delete

}
