<?php

namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class AdFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const DESCRIPTION = 'description';
    public const PRICE = 'price';
    public const IMAGE = 'image';
    public const CATEGORY_ID = 'category_id';
    public const CITY_ID = 'city_id';
    public const USER_ID = 'user_id';


    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::DESCRIPTION => [$this, 'description'],
            self::PRICE => [$this, 'price'],
            self::IMAGE => [$this, 'image'],
            self::CATEGORY_ID => [$this, 'category_id'],
            self::CITY_ID => [$this, 'city_id'],
            self::USER_ID => [$this, 'user_id'],
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

    public function description(Builder $builder, $value)
    {
        $builder->where('description', '>', $value);
    }

    public function price(Builder $builder, $value)
    {
        $builder->where('price', '>', $value);
    }

    public function image(Builder $builder, $value)
    {
        $builder->where('image', $value);
    }

    public function category_id(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }
    public function city_id(Builder $builder, $value)
    {
        $builder->where('city_id', $value);
    }
    public function user_id(Builder $builder, $value)
    {
        $builder->where('user_id', $value);
    }
}
