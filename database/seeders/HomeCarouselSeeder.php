<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeCarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home__carousels')->insert([
            'title' => config('app.name'),
            'image' => 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg',
            'is_public' => true,
        ]);
    }
}
