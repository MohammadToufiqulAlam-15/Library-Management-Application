<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Arif Rizvee',
            'username' => 'rizvee@gmail.com',
            'password' => bcrypt('12345'), // password
        ];
    }


}
