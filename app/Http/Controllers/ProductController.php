<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = \App\Models\Product::all();

        return view('viewproducts', ['allProducts' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createproduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        \App\Models\Product::create([
          'name' => $request->get('name'),
          'description' => $request->get('description'),
          'price' => $request->get('price'),
          'count' => $request->get('count'),
        ]);

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
