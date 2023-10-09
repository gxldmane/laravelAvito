<?php

namespace App\Services\Ad;


use App\Models\Ad;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data)
    {
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        Ad::create($data);
    }

    public function update($ad, $data)
    {
        if (array_key_exists('image', $data)) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
            if ($ad->image != null) {
                Storage::delete($ad->image);
            }

        } else {
            $data['image'] = $ad['image'];
        }
        $ad->update($data);
    }
}
