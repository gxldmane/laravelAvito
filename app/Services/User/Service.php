<?php

namespace App\Services\User;




use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data)
    {
        $data['avatar'] = Storage::disk('public')->put('/avatars', $data['avatar']);
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $data['avatar'],
            'city_id' => $data['city_id'],

        ]);
    }
    public function update($user, $data) {
        $data['avatar'] = Storage::disk('public')->put('/avatars', $data['avatar']);
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $data['avatar'],
            'city_id' => $data['city_id'],
        ]);
    }
}
