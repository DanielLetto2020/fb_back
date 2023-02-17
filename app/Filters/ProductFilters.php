<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProductFilters extends QueryFilter
{
    /**
     * 'name', // Название (поиск по частичному вхождение)
     * 'code', // Код (поиск по полному вхождению)
     * 'color', // Цвет (поиск по полному вхождению)
     * 'price', // Цена (диапазон между двумя величинами либо же полное вхождение)
     * 'size', // Размер (поиск по полному вхождению)
     * 'description', // Описание (поиск по содержанию слову/фразу)
     */

    final public function name(string $name): Builder
    {
        return $this->builder->where('name', 'LIKE', '%' . $name . '%');
    }

    final public function code(int $code): Builder
    {
        return $this->builder->where('code', $code);
    }

    final public function color(string $color): Builder
    {
        return $this->builder->where('color', 'LIKE', '%' . $color . '%');
    }

    final public function priceStart(float|int $priceStart): Builder
    {
        if ($this->request->has('priceEnd')) {
            return $this->builder->whereBetween('price', [
                $priceStart,
                $this->request->priceEnd
            ]);
        }

        return $this->builder->where('price', $priceStart);
    }

    final public function priceEnd(float|int $priceEnd): Builder
    {
        if ($this->request->has('priceStart')) {
            return $this->builder->whereBetween('price', [
                $this->request->priceStart,
                $priceEnd
            ]);
        }

        return $this->builder->where('price', $priceEnd);
    }

    final public function size(int $size): Builder
    {
        return $this->builder->where('size', $size);
    }

    final public function description(string $description): Builder
    {
        return $this->builder->where('description', 'LIKE', '%' . $description . '%');
    }
}
