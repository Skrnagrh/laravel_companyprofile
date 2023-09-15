<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StartupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $startups = [
            [
                'user_id' => 1,
                'title' => 'unicorn',
                'slug' => 'unicorn',
                'excerpt' => 'This is a sample excerpt for the startup article 1.',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate rem similique cumque fugiat quia reiciendis at ullam, ipsum, quisquam expedita a in enim nobis eaque repudiandae corrupti reprehenderit sed laboriosam voluptas eum? Perspiciatis natus quos quas maiores blanditiis cupiditate.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate rem similique cumque fugiat quia reiciendis at ullam, ipsum, quisquam expedita a in enim nobis eaque repudiandae corrupti reprehenderit sed laboriosam voluptas eum? Perspiciatis natus quos quas maiores blanditiis cupiditate.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'title' => 'decacorn',
                'slug' => 'decacorn',
                'excerpt' => 'This is a sample excerpt for the startup article 2.',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate rem similique cumque fugiat quia reiciendis at ullam, ipsum, quisquam expedita a in enim nobis eaque repudiandae corrupti reprehenderit sed laboriosam voluptas eum? Perspiciatis natus quos quas maiores blanditiis cupiditate.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate rem similique cumque fugiat quia reiciendis at ullam, ipsum, quisquam expedita a in enim nobis eaque repudiandae corrupti reprehenderit sed laboriosam voluptas eum? Perspiciatis natus quos quas maiores blanditiis cupiditate.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'title' => 'hectocorn',
                'slug' => 'hectocorn',
                'excerpt' => 'This is a sample excerpt for the startup article 2.',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate rem similique cumque fugiat quia reiciendis at ullam, ipsum, quisquam expedita a in enim nobis eaque repudiandae corrupti reprehenderit sed laboriosam voluptas eum? Perspiciatis natus quos quas maiores blanditiis cupiditate.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate rem similique cumque fugiat quia reiciendis at ullam, ipsum, quisquam expedita a in enim nobis eaque repudiandae corrupti reprehenderit sed laboriosam voluptas eum? Perspiciatis natus quos quas maiores blanditiis cupiditate.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('startups')->insert($startups);
    }
}


