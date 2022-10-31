<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 250; $x++) {
        Contact::insert([
            [
                'name' => Str::random(5),
                'email' => Str::random(6).'@gmail.com',
                'subject' => Str::random(25),
                'phone' => Str::random(11),
                'message' => Str::random(255),
                'created_at' => now(),
            ],

        ]);
    }
    }
}
