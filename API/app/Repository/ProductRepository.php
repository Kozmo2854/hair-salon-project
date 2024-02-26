<?php

namespace App\Repository;

use App\Models\Product;
use Exception;

class ProductRepository
{

    public function single($id)
    {
        return Product::find($id);
    }

    public function update($id, $data)
    {
        $product = $this->single($id);
        foreach ($data as $column => $value) {
            $product->$column = $value;
        }
        return $product->save();
    }

    public function save($data)
    {
        $product = new Product();

        $product->fill($data);
        if ($product->save()) {
            return $product->refresh();
        }

        throw new Exception('Failed saving to the database', 503);
    }

    public function getAll()
    {
        return Product::all();
    }
}
