<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_teams')->insert([
            'name' => 'Ros socheath',
            'position' => 'Engineer',
            'image' => 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg',
        ]);
        DB::table('about_teams')->insert([
            'name' => 'Ros socheath',
            'position' => 'Engineer',
            'image' => 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg',
        ]);
        DB::table('about_teams')->insert([
            'name' => 'Ros socheath',
            'position' => 'Engineer',
            'image' => 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg',
        ]);
    }
}
