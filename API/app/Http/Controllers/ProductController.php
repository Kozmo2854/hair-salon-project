<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminProductsResource;
use App\Models\Product;
use App\Services\CategoryService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Arr;

class ProductController extends BaseController
{
    protected mixed $modelClass = Product::class;
    public function getProductsForAdminPanel(): AnonymousResourceCollection
    {
        return AdminProductsResource::collection($this->modelClass->with('category')->get());
    }

    public function store(Request $request): Model|string
    {
        $data = $request->all();
        $categoryId = CategoryService::getCategoryIdByName($data['category']);
        $data['category_id'] = $categoryId;
        $newModel = $this->modelClass::create(Arr::except($data, ['category', 'created_at', 'updated_at']));

        if ($newModel) {
            $newModel = new AdminProductsResource($newModel);
            return $newModel->toJson();
        } else {
            // Handle the case where the model was not updated
            return response()->json(['error' => 'Failed to update model'], 500);
        }
    }

    public function update(Request $request,int $id): string
    {
        $data = $request->all();
        $categoryId = CategoryService::getCategoryIdByName($data['category']);
        $data['category_id'] = $categoryId;
        $updatedModel = $this->modelClass::whereId($id)->update(Arr::except($data, ['category', 'created_at', 'updated_at']));

        if ($updatedModel) {
            $updatedModel = $this->modelClass::findOrFail($id);
            $updatedModel = new AdminProductsResource($updatedModel);
            return $updatedModel->toJson();
        } else {
            // Handle the case where the model was not updated
            return response()->json(['error' => 'Failed to update model'], 500);
        }
    }
}
