<?php

namespace App\Http\Controllers;

use App\Filters\ProductFilters;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductController extends Controller
{
    final public function search(Request $request, ProductFilters $productFilters): JsonResource
    {
        if (count($request->all()) > 0) {
            $products = Product::query()->filter($productFilters)->get();
            return ProductResource::collection($products);
        }

        return response()->json(['data' => []]);
    }
}
