<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Teknologi',
                'slug' => 'teknologi',
            ],
            [
                'name' => 'Berita Terkini',
                'slug' => 'berita-terkini',
            ],
            [
                'name' => 'Olahraga',
                'slug' => 'olahraga',
            ],
            [
                'name' => 'Kesehatan',
                'slug' => 'kesehatan',
            ],
            [
                'name' => 'Hiburan',
                'slug' => 'hiburan',
            ],
            [
                'name' => 'Bisnis',
                'slug' => 'bisnis',
            ],
            [
                'name' => 'Pendidikan',
                'slug' => 'pendidikan',
            ],
            [
                'name' => 'Pariwisata',
                'slug' => 'pariwisata',
            ],
            [
                'name' => 'Sains',
                'slug' => 'sains',
            ],
            [
                'name' => 'Otomotif',
                'slug' => 'otomotif',
            ],
        ];


        DB::table('categories')->insert($categories);
    }
}
