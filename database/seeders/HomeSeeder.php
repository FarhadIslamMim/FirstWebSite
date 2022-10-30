<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeSlide;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeSlide::insert([
            [

                'title' => 'I will give you Best Product in the shortest time.',
                'short_title' => 'I m a Rasalina based product design & visual designer focused on crafting clean & user‑friendly experiences',
                'video_url' => 'https://www.youtube.com/watch?v=OpnIHNIp31s&list=RDGMEM916WJxafRUGgOvd6dVJkeQ&index=6',
                'created_at' => now(),
            ]
        ]);
    }
}
