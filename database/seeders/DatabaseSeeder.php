<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Contact::factory(100)->create();

        $this->call(UserSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(HomeSeeder::class);
       // factory(ContactSeeder::class, 200)->create();

        $this->call(ContactSeeder::class);
       }

    
}
