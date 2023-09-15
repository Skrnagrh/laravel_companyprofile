<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $news = [
            [
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Sample News Title 1',
                'slug' => 'sample-news-title-1',
                'excerpt' => 'This is a sample excerpt for the news article 1.',
                'body' => 'This is the body of the news article 1.',
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 2,
                'user_id' => 1,
                'title' => 'Sample News Title 2',
                'slug' => 'sample-news-title-2',
                'excerpt' => 'This is a sample excerpt for the news article 2.',
                'body' => 'This is the body of the news article 2.',
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 3,
                'user_id' => 1,
                'title' => 'Sample News Title 3',
                'slug' => 'sample-news-title-3',
                'excerpt' => 'This is a sample excerpt for the news article 3.',
                'body' => 'This is the body of the news article 3.',
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 4,
                'user_id' => 1,
                'title' => 'Sample News Title 4',
                'slug' => 'sample-news-title-4',
                'excerpt' => 'This is a sample excerpt for the news article 4.',
                'body' => 'This is the body of the news article 4.',
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 5,
                'user_id' => 1,
                'title' => 'Sample News Title 5',
                'slug' => 'sample-news-title-5',
                'excerpt' => 'This is a sample excerpt for the news article 5.',
                'body' => 'This is the body of the news article 5.',
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 6,
                'user_id' => 1,
                'title' => 'Sample News Title 6',
                'slug' => 'sample-news-title-6',
                'excerpt' => 'This is a sample excerpt for the news article 6.',
                'body' => 'This is the body of the news article 6.',
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('news')->insert($news);
    }
}
