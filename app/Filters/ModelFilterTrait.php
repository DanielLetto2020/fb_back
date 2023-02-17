<?php


namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

trait ModelFilterTrait
{
    public function scopeFilter(Builder $builder, QueryFilter $filters): Builder
    {
        return $filters->apply($builder);
    }
}
