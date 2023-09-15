<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProspectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prospects = [
            [
                'category_id' => 1,
                'user_id' => 1, 
                'title' => 'Sample Prospect Title 1',
                'slug' => 'sample-prospect-title-1',
                'body' => 'This is the body of the prospect 1.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 2,
                'user_id' => 1, 
                'title' => 'Sample Prospect Title 2',
                'slug' => 'sample-prospect-title-2',
                'body' => 'This is the body of the prospect 2.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 1,
                'user_id' => 1, 
                'title' => 'Sample Prospect Title 3',
                'slug' => 'sample-prospect-title-3',
                'body' => 'This is the body of the prospect 3.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 2,
                'user_id' => 1, 
                'title' => 'Sample Prospect Title 4',
                'slug' => 'sample-prospect-title-4',
                'body' => 'This is the body of the prospect 4.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('prospects')->insert($prospects);
    }
}
