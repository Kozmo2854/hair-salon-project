<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return Category::all();
    }

    /**
     * @param Category $category
     * @return Category
     */
    public function show(Category $category): Category
    {
        return $category;
    }

    /**
     * @throws Exception
     */
    public function store(Request $request): Category
    {
        return Category::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category): Category
    {
        $category->update($request->all());
        return $category;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): ?bool
    {
        return $category->delete();

    }
}
