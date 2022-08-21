<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topbars')->insert([
            'phone' => '0966855502',
            'email' => 'admin@gmail.com',
            'date_start' => 'Monday',
            'date_end' => 'friday',
            'time_start' => '7:00',
            'time_end' => '5:00',
            //            'facebook_link' => 'monday',
            //            'telegram_link' => 'monday',
            //            'wechat_link' => 'monday',
            //            'line_link' => 'monday',

        ]);
    }
}
