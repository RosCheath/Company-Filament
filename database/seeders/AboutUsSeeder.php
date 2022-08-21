<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->insert([
            'title' => 'Unique Solutions For Residentials & Industries!',
            'description' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                            Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                             sed stet lorem sit clita duo justo magna dolore erat amet Tempor
                              erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                              diam amet diam et eos. Clita erat ipsum et lorem et sit,
                              sed stet lorem sit clita duo justo magna dolore erat amet',
            'detail' => '25 Experience',
            'image' => 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg',
        ]);
    }
}
