<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdatePorductRequest;
use App\Models\Category;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;
use Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view('products.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {

        $this->authorize('create', Product::class);
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::lower(str_replace(' ', '-', $data['name'])) ?? null;
        $product = Product::create($data);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $product->addMediaFromRequest('image')->toMediaCollection('images');
        }
        // $product->specification_id = $request->specification_id;
        // $product->auction          = $request->auction;
        // $product->addMediaFromRequest('vedio')->toMediaCollection('media');

        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $this->authorize('view', $product);
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $this->authorize('update', $product);
        $categories = Category::all();
        return view('products.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePorductRequest $request, Product $product)
    {
        $this->authorize('update', $product);
        $data = $request->validated();
        if (isset($data['name'])) {
            $data['slug'] = Str::slug($data['name']);
        }
        $product->update($data);

        if (isset($data['image'])) {
            $product->clearMediaCollection('images');
            $product->addMediaFromRequest('image')->toMediaCollection('images');
        }

        // $product->addMediaFromRequest('vedio')->toMediaCollection('media');
        return redirect()->route('products.show', $product)->with('status', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->authorize('delete', $product);
        $product->delete();
        return redirect()->route('products.index')->with('status', 'Successfuly Deleted');
    }
}
