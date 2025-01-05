<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exam;

class ExamSeeder extends Seeder
{
    public function run()
    {
        Exam::create([
            'title' => 'Sample Exam',
        ]);
    }
}
