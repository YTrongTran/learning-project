<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ExamSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            VoyagerDummyDatabaseSeeder::class,
            VoyagerDatabaseSeeder::class

        ]);
    }
}
