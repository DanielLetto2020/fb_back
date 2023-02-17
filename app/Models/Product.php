<?php

namespace App\Models;

use App\Filters\ModelFilterTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Product filter(\App\Filters\QueryFilter $filters)
 * @method static Builder|Product newModelQuery()
 * @method static Builder|Product newQuery()
 * @method static Builder|Product query()
 * @method static Builder|Product whereCreatedAt($value)
 * @method static Builder|Product whereId($value)
 * @method static Builder|Product whereUpdatedAt($value)
 * @property string $name
 * @property int|null $code
 * @property string|null $color
 * @property float $price
 * @property int|null $size
 * @property string|null $description
 * @method static Builder|Product whereCode($value)
 * @method static Builder|Product whereColor($value)
 * @method static Builder|Product whereDescription($value)
 * @method static Builder|Product whereName($value)
 * @method static Builder|Product wherePrice($value)
 * @method static Builder|Product whereSize($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    use HasFactory, ModelFilterTrait;

    protected $fillable = [
        'name', // Название (поиск по частичному вхождение)
        'code', // Код (поиск по полному вхождению)
        'color', // Цвет (поиск по полному вхождению)
        'price', // Цена (диапазон между двумя величинами либо же полное вхождение)
        'size', // Размер (поиск по полному вхождению)
        'description', // Описание (поиск по содержанию слову/фразу)
    ];
}
