<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('customs', function (Blueprint $table) {
            $table->integer('correct_answer')->comment('câu đúng');
            $table->integer('total_question')->comment('tổng câu hỏi');
            $table->float('total_score')->commnet('tổng điểm');
            $table->string('level')->comment('trình độ');
            $table->integer('id_exams');
            $table->timestamp('finished')->comment('Thời điểm bài thi hoàn thành');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customs', function (Blueprint $table) {
            //
        });
    }
};
