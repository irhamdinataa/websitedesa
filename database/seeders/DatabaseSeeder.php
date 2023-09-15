<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PostStatus;
use App\Models\User;
use App\Models\Slider;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => 1234
        ]);

        Slider::create([
            'judul'         => 'Website Desa Kragilan',
            'deskripsi'     => 'Desa Kragilan adalah desa yang terletak di kecamatan Gebang, Kabupaten Purworejo, Provinsi Jawa Tengah, Kode Pos 54191Desa Kragilan adalah desa yang terletak di kecamatan Gebang, Kabupaten Purworejo, Provinsi Jawa Tengah, Kode Pos 54191',
            'link_btn'      => '#',
            'img_slider'    => 'img-slider/slide-1.jpg'
        ]);
        Slider::create([
            'judul'         => 'Sejarah Desa',
            'deskripsi'     => 'Desa Kragilan adalah desa yang terletak di kecamatan Gebang, Kabupaten Purworejo, Provinsi Jawa Tengah, Kode Pos 54191Desa Kragilan adalah desa yang terletak di kecamatan Gebang, Kabupaten Purworejo, Provinsi Jawa Tengah, Kode Pos 54191',
            'link_btn'      => '#',
            'img_slider'    => 'img-slider/slide-2.jpg'
        ]);
        Slider::create([
            'judul'         => 'Visi & Misi',
            'deskripsi'     => 'Visi & Misi desa Kragilana dalah Terwujudnya masyarakat Desa Kragilan yang Bersih, Relegius, Sejahtera, Rapi dan Indah',
            'link_btn'      => '#',
            'img_slider'    => 'img-slider/slide-3.jpg'
        ]);

        PostStatus::create([
            'status'    => 'draft'
        ]);
        PostStatus::create([
            'status'    => 'publish'
        ]);

    }
}
