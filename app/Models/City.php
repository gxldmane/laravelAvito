<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin Builder
 */
class City extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'cities';
    protected $fillable = ['title'];

    public function ads() {
        return $this->hasMany(Ad::class);
    }
}
