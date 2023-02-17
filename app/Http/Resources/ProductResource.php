<?php

namespace App\Http\Resources;

use App\Models\Product;
use Exception;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * @var Product
     */
    public $resource;

    /**
     * @param $request
     * @return array
     * @throws Exception
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'code' => $this->resource->code,
            'color' => $this->resource->color,
            'price' => $this->resource->price,
            'size' => $this->resource->size,
            'description' => $this->resource->description,
        ];
    }
}
