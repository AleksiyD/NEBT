<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'name' => 'Администратор',
            'login' => 'admin',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }
}
