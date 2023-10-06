<?php

namespace App\Services\Product;



use App\Models\Ad;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data, $user)
    {
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        Ad::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'price' => $data['price'],
            'image' => $data['image'],
            'category_id' => $data['category_id'],
            'city_id' => $data['city_id'],
            'user_id' => $user->id,
        ]);
    }
    public function update($ad, $data, $user) {
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        $ad->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'price' => $data['price'],
            'image' => $data['image'],
            'category_id' => $data['category_id'],
            'city_id' => $data['city_id'],
            'user_id' => $user->id,
        ]);
    }
}
