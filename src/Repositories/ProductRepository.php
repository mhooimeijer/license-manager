<?php

namespace Repositories;

use Models\Product;

class ProductRepository {
    protected $products = [];

    public function add(Product $product) {
        $this->products[] = $product;
    }

    public function all() {
        return $this->products;
    }

    public function findById($id) {
        foreach ($this->products as $product) {
            if ($product->getId() === $id) {
                return $product;
            }
        }
        return null;
    }
}