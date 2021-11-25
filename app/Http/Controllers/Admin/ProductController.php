<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Product::class);
        $categories = Category::all();
        return view('admin.products.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->authorize('create', Product::class);
        $request->validate([
            'name'      => 'required|string|min:10|max:55',
            'price'     => 'required|numeric',
            'quantity'     => 'required|numeric',
            'language' => 'required',
            'category_id'  => 'required|numeric|exists:categories,id',
            'specification_id'   => 'required|numeric|exists:specifications,id',
            'is_used' => 'required',
            'auction' => 'required',

        ]);
        $product = new Product();
        $product->name      = $request->name;
        $product->price     = $request->price;
        $product->quantity     = $request->quantity;
        $product->language = $request->language;
        $product->category_id  = $request->category_id;
        $product->specification_id = $request->specification_id;
        $product->is_used = $request->is_used;
        $product->auction = $request->auction;
        $product->save();
        return redirect()->route('products.index', $product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $this->authorize('view', Product::class);
        return view('admin.products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $this->authorize('update', Product::class);
        return view('admin.products.show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->authorize('update', Product::class);
        $request->validate([
            'name'      => 'required|string|min:10|max:55',
            'price'     => 'required|numeric',
            'quantity'     => 'required|numeric',
            'language' => 'required',
            'category_id'  => 'required|numeric|exists:categories,id',
            'specification_id'   => 'required|numeric|exists:specifications,id',
            'is_used' => 'required',
            'auction' => 'required',

        ]);
        $product->name      = $request->name;
        $product->price     = $request->price;
        $product->quantity     = $request->quantity;
        $product->language = $request->language;
        $product->category_id  = $request->category_id;
        $product->specification_id = $request->specification_id;
        $product->is_used = $request->is_used;
        $product->auction = $request->auction;
        $product->save();
        return redirect()->route('products.show', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->authorize('delete', Product::class);
        $product->delete();
        return redirect()->back();
    }
}
