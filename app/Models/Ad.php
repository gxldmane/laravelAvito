<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @mixin Builder
 */
class Ad extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'ads';
    protected $fillable = ['title', 'description', 'price', 'image', 'category_id', 'city_id', 'user_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
