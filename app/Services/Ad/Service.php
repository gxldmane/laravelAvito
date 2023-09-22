<?php

namespace App\Services\Ad;



use App\Models\Ad;

class Service
{
    public function store($data)
    {
        Ad::create($data);
    }
    public function update($ad, $data) {
        $ad->update($data);
    }
}
