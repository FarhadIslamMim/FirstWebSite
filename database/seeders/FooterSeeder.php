<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Seeder;


class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::insert([
            [
                'number' => '01750770075',
                'short_description' => 'There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form is also here.',
                'adress' => 'Level 13, 2 Elizabeth Steereyt set',
                'email' => 'mim@gmail.com',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'copyright' => 'Copyright @ Theme_Pure 2021 All right Reserved',
                'created_at' => now(),
            ]
        ]);
    }
}
