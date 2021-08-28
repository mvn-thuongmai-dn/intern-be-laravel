<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('components.products.index', ['products' => $data]);
    }

    public function create()
    {
        return view('components.products.add');
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image,
            'quantity' => $request->quantity,
        ]);
        $product->save();
        return redirect()->route('products');
    }
}
