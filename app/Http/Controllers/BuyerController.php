<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;
use App\Models\Hardware;


class BuyerController extends Controller
{

    public function index()
    {
        $buyers = Buyer::all();
        return view('buyers', compact('buyers'));
    }


    public function create()
    {
        $hardware = Hardware::all();
        return view('buyers.create', compact('hardware'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first' => 'required',
            'last' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'hardware_id' => 'required',
       ]);

       $buyers = Buyer::create([
        'first' => $request->first,
        'last' => $request->last,
        'email' => $request->email,
        'phone' => $request->phone,
        'hardware_id' => $request->hardware_id,
        
       ]);

       return view('buyers.show', compact('buyers'));
    }


    public function show($id)
    {
        $buyers = Buyer::find($id);
        $hardware = Hardware::all();
        return view('buyers.show', compact('hardware', 'buyers'));
    }


    public function edit($id)
    {
        $buyers = Buyer::find($id);
        $hardware = Hardware::all();
        return view('buyers.edit', compact('hardware', 'buyers'));
    }


    public function update(Request $request, $id)
    {
        $buyers = Buyer::find($id);
        $validated =$request->validate([
            'first' => 'required',
            'last' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'hardware_id' => 'required',
        ]);

        $buyers->fill([
            'first' => $request->first,
            'last' => $request->last,
            'email' => $request->email,
            'phone' => $request->phone,
            'hardware_id' => $request->hardware_id,
            ]);

        $buyers->save();
        return view('buyers.show',compact('buyers'));
    }

    public function destroy($id)
    {
        $buyers = Buyer::find($id);
        $buyers->delete();
        return redirect('/buyers');
    }
}


