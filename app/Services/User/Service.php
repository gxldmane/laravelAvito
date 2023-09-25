<?php

namespace App\Services\User;




use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Service
{
    public function store($data)
    {
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $data['avatar'],
            'city_id' => $data['city_id'],

        ]);
    }
    public function update($user, $data) {
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $data['avatar'],
            'city_id' => $data['city_id'],
        ]);
    }
}
