<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Berita;
use App\Models\Slider;
use App\Models\Sejarah;
use App\Models\Wilayah;
use App\Models\Kategori;
use App\Models\PostStatus;
use App\Models\VisiMisi;
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

        Kategori::create([
            'kategori'  => 'Teknologi',
            'slug'      => 'teknologi',
            'user_id'   => 1
        ]);
        Kategori::create([
            'kategori'  => 'Kesenian',
            'slug'      => 'kesenian',
            'user_id'   => 1
        ]);

        Wilayah::create([
            'judul' => 'Wilayah Desa Kragilan',
            'body'  => 'Desa Kragilan adalah sebuah desa di kecamatan Gebang, Kabupaten Purworejo, Jawa Tengah, Indonesia. Desa ini terletak di sebelah barat pusat kecamatan Gebang, berjarak sekitar 5 kilometer. Secara geografis, desa Kragilan terletak di dataran tinggi dengan ketinggian sekitar 200 meter di atas permukaan laut. Desa ini berbatasan dengan desa Ngaglik di sebelah utara, desa Gebang di sebelah timur, desa Wadaslintang di sebelah selatan, dan desa Mlaras di sebelah barat. Desa Kragilan memiliki luas wilayah sekitar 3,5 kilometer persegi dengan jumlah penduduk sebanyak 866 jiwa pada tahun 2023. Mayoritas penduduk desa Kragilan bekerja di sektor pertanian, perkebunan, dan peternakan.  Infrastruktur di desa Kragilan cukup memadai, dengan jalan desa yang sudah beraspal dan beberapa fasilitas umum seperti sekolah, rumah sakit, dan pasar.',
            'user_id'   => 1
        ]);

        Sejarah::create([
            'judul' => 'Sejarah Desa Kragilan',
            'body'  => 'Desa Kragilan adalah sebuah desa di kecamatan Gebang, Kabupaten Purworejo, Jawa Tengah, Indonesia. Desa ini terletak di sebelah barat pusat kecamatan Gebang, berjarak sekitar 5 kilometer. Secara geografis, desa Kragilan terletak di dataran tinggi dengan ketinggian sekitar 200 meter di atas permukaan laut. Desa ini berbatasan dengan desa Ngaglik di sebelah utara, desa Gebang di sebelah timur, desa Wadaslintang di sebelah selatan, dan desa Mlaras di sebelah barat. Desa Kragilan memiliki luas wilayah sekitar 3,5 kilometer persegi dengan jumlah penduduk sebanyak 866 jiwa pada tahun 2023. Mayoritas penduduk desa Kragilan bekerja di sektor pertanian, perkebunan, dan peternakan.  Infrastruktur di desa Kragilan cukup memadai, dengan jalan desa yang sudah beraspal dan beberapa fasilitas umum seperti sekolah, rumah sakit, dan pasar.',
            'user_id'   => 1
        ]);

        VisiMisi::create([
            'visi'      =>  'Terwujudnya Desa Kragilan yang sejahtera, mandiri, dan berbudaya',
            'misi'      =>  ' - Meningkatkan perekonomian masyarakat melalui pengembangan potensi pertanian, perkebunan, dan pariwisata
                            - Meningkatkan kualitas sumber daya manusia melalui pendidikan dan kesehatan
                            - Meningkatkan kesadaran masyarakat akan pentingnya kelestarian lingkungan',
            'user_id'   => 1
        ]);
    }
}
