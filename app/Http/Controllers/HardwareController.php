<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hardware;


class HardwareController extends Controller
{

    public function index()
    {
        $hardware = Hardware::all();
        $manufacturers = Manufacturer::all();
        return view('hardware', compact('hardware'));
    }


    public function create()
    {
        return view('hardware.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'os' => 'required',
            'cpu' => 'required',
            'gpu' => 'required',
            'storage' => 'required',
            'ram' => 'required',
            'price' => 'required',
       ]);

       $hardware = Hardware::create([
        'name' => $request->name,
        'type' => $request->type,
        'os' => $request->os,
        'cpu' => $request->cpu,
        'gpu' => $request->gpu,
        'storage' => $request->storage,
        'ram' => $request->ram,
        'price' => $request->price,
       ]);

       return view('hardware.show', compact('hardware'));
    }


    public function show($id)
    {
        $hardware = Hardware::find($id);
        return view('hardware.show', compact('hardware'));
    }


    public function edit($id)
    {
        $hardware = Hardware::find($id);
        return view('hardware.edit', compact('hardware'));
    }


    public function update(Request $request, $id)
    {
        $hardware = Hardware::find($id);
        $validated =$request->validate([
            'name' => 'required',
            'type' => 'required',
            'os' => 'required',
            'cpu' => 'required',
            'gpu' => 'required',
            'storage' => 'required',
            'ram' => 'required',
            'price' => 'required',

        ]);

        $hardware->fill([
        'name' => $request->name,
        'type' => $request->type,
        'os' => $request->os,
        'cpu' => $request->cpu,
        'gpu' => $request->gpu,
        'storage' => $request->storage,
        'ram' => $request->ram,
        'price' => $request->price,
    ]);
        $hardware->save();
        return view('hardware.show',compact('hardware'));
    }






    public function destroy($id)
    {
        $hardware = Hardware::find($id);
        $hardware ->delete();
        return redirect('/hardware');
    }
}

