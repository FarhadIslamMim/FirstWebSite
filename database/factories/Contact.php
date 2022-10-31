<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Contact extends Factory
{

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'subject'=> $this->faker->text(),
            'phone'=> $this->faker->name(),
            'message'=> $this->faker->text(),
        ];
    }


}
