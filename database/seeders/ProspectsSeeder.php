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
                'title' => 'Andro Mind 1',
                'slug' => 'andromind-1',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptatibus hic repellat at quod reprehenderit aperiam beatae incidunt soluta facilis. Ea odit nobis nisi? Deserunt cupiditate delectus error, modi quo ullam perferendis corrupti accusantium perspiciatis facilis ad, totam, beatae laborum cumque dolor quas? Assumenda perferendis accusamus tempore unde. Quam, facilis. prospect 1.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 2,
                'user_id' => 1,
                'title' => 'Andro Mind 2',
                'slug' => 'andromind-2',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptatibus hic repellat at quod reprehenderit aperiam beatae incidunt soluta facilis. Ea odit nobis nisi? Deserunt cupiditate delectus error, modi quo ullam perferendis corrupti accusantium perspiciatis facilis ad, totam, beatae laborum cumque dolor quas? Assumenda perferendis accusamus tempore unde. Quam, facilis. prospect 2.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Andro Mind 3',
                'slug' => 'andromind-3',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptatibus hic repellat at quod reprehenderit aperiam beatae incidunt soluta facilis. Ea odit nobis nisi? Deserunt cupiditate delectus error, modi quo ullam perferendis corrupti accusantium perspiciatis facilis ad, totam, beatae laborum cumque dolor quas? Assumenda perferendis accusamus tempore unde. Quam, facilis. prospect 3.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 2,
                'user_id' => 1,
                'title' => 'Andro Mind 4',
                'slug' => 'andromind-4',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptatibus hic repellat at quod reprehenderit aperiam beatae incidunt soluta facilis. Ea odit nobis nisi? Deserunt cupiditate delectus error, modi quo ullam perferendis corrupti accusantium perspiciatis facilis ad, totam, beatae laborum cumque dolor quas? Assumenda perferendis accusamus tempore unde. Quam, facilis. prospect 4.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('prospects')->insert($prospects);
    }
}
