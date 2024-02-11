<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return Product::all();
    }

    /**
     * @param Product $product
     * @return Product
     */
    public function show(Product $product): Product
    {
        return $product;
    }

    /**
     * @throws Exception
     */
    public function store(Request $request): Product
    {
        Product::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product): Product
    {
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): ?bool
    {
        return $product->delete();

    }
}
