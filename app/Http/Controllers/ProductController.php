<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataValidated = $request->validate([
            'name' => 'required|string|min:1|max:255',
            'description' => 'required|string|min:1',
            'price' => 'required|numeric|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $product = new Product($dataValidated);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $product->image = basename($imagePath);
        }

        $product->save();
        
        return redirect()->route('products.show', $product->id)->with('product_saved', 'Product saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
        $dataValidated = $request->validate([
            'name' => 'required|string|min:1|max:255',
            'description' => 'required|string|min:1',
            'price' => 'required|numeric|min:1',
            'image' => 'sometimes|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('/images/'.$product->image);
            $imagePath = $request->file('image')->store('public/images');
            $dataValidated["image"] = basename($imagePath);
        }

        $product->update($dataValidated);
        
        return redirect()->route('products.show', $product->id)->with('product_saved', 'Product updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Storage::disk('public')->delete('/images/'.$product->image);
        $product->delete();

        return redirect()->route('products.index');
    }
}
