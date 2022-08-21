<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutCarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_carousels')->insert([
            'image' => 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg',
        ]);
    }
}
