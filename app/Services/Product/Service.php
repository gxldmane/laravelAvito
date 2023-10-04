<?php

namespace App\Services\Product;



use App\Models\Ad;

class Service
{
    public function store($data, $user)
    {
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
