<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_us')->insert([
            'title' => 'If You Have Any Problem, Please Contact Us',
            'map' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d7819.098408472775!2d104.88140469393281!3d11.512406697138637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m3!3m2!1d11.563843799999999!2d104.9279466!4m0!5e0!3m2!1skm!2skh!4v1661273253058!5m2!1skm!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
            'contact_image' => 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg',
            'location' => '273 Street, Pnhom Penh, Cambodia',
        ]);
    }
}
