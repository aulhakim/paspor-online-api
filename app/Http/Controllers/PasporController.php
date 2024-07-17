<?php

namespace App\Http\Controllers;
use App\Models\Paspor;

use Illuminate\Http\Request;

class PasporController extends Controller
{
    public function index()
    {
        $items = YourModel::all();
        return view('your-view-name.index', compact('items'));
    }

    public function create()
    {
        return view('your-view-name.create');
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            // validation rules here
        ]);

        YourModel::create($request->all());
        return redirect()->route('your-route-name.index');
    }

    public function show($id)
    {
        $item = YourModel::findOrFail($id);
        return view('your-view-name.show', compact('item'));
    }

    public function edit($id)
    {
        $item = YourModel::findOrFail($id);
        return view('your-view-name.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        // Validate input
        $request->validate([
            // validation rules here
        ]);

        $item = YourModel::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('your-route-name.index');
    }

    public function destroy($id)
    {
        $item = YourModel::findOrFail($id);
        $item->delete();
        return redirect()->route('your-route-name.index');
    }

    public function getPaspor($id)
    {
        $items = Paspor::where('nomor_paspor',$id)->first();

        return json_encode($items);

        // return view('your-view-name.index', compact('items'));
    }
}
