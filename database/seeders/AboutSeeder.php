<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::insert([
            [
                'title' => 'I have transform your ideas into remarkable digital products',
                'short_title' => '20+ Years Experience In this game, Me Product Designing',
                'short_description' => 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer',
                'long_description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which do not look even slightly believable',

                'institute_name1' => 'Daffodill International University',
                'year1' => '2018-2022',
                'cgpa_description1' => 'CGPA: 3.33 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available.',

                'institute_name2' => 'Thakurgaon Govt. Collage',
                'year2' => '2015-2017',
                'cgpa_description2' => 'GPA: 4.08 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available.',

                'institute_name3' => 'Mollapara High School',
                'year3' => '2015',
                'cgpa_description3' => 'GPA: 5.00 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available.',

                'created_at' => now(),
            ],

        ]);
    }
}
