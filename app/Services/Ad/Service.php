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
    public function update($ad, $data) {
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        $ad->update($data);
    }
}
