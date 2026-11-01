<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('item.index', [
            'item' => Item::latest()->get()
        ]);
    }

    public function add()
    {
        return view('item.insert');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'item' => 'required',
            'owner' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        Item::create([
            'item' => $request->item,
            'owner' => $request->owner,
            'phone' => $request->phone,
            'address' => $request->address,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('item')->with('message', 'Data added successfully!');
    }

    public function delete($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('item.index')->with('message', 'Data deleted successfully!');
    }
}
