<?php

namespace App\Http\Controllers\dashboard;

use App\Models\order;
use App\Models\Client;
use App\Models\district;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

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
        })->when($request->district_id, function ($q) use ($request) {
            $q->where('district_id', $request->district_id);
        })->latest()->paginate(6);
        return view('dashboard.clients.index', compact('clients', 'district'));
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
        $data['district'] = district::all();
        $data['orders'] = order::where('client_id', $client->id)->whereMonth('created_at' ,Carbon::now()->year())->get();
        $data['orderSum'] = order::where('client_id',$client->id)->select(
            DB::raw('SUM(total_price) as sum')
        )->get();
        /* end sum */

        foreach ($data['orders'] as $order) {
            $data['sumProduct'] = 0 ;
            $data['mapLandry'] = 0 ;
            $data['mapIron'] = 0 ;
            $data['mapOther'] = 0 ;

            foreach( $order->products as $product){
                $data['sumProduct'] += $product->pivot->quantity;

                if ($product->pivot->map == 'landry') {
                    # code...
                    $data['mapLandry'] += 1;
                }elseif( $product->pivot->map == 'iron'){

                    $data['mapIron'] += 1;
                }else{$data['mapOther'] += 1;}
            };

            };
        /* end of foreach find map */

            return view('dashboard.clients.edit', compact('client'))->with($data);

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
