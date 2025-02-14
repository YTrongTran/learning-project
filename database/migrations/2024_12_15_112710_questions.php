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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->integer('_index');
            $table->text('question_text')->nullable();
            $table->text('passage')->nullable();
            $table->string('image')->nullable();
            $table->string('audio')->nullable();
            $table->enum('type', ['multiple_choice', 'true_false', 'short_answer'])->default('multiple_choice');
            $table->text('answer_1');
            $table->text('answer_2');
            $table->text('answer_3');
            $table->text('answer_4');
            $table->integer('answer_correct');
            $table->timestamps();
            $table->unsignedBigInteger('exam_id')->nullable();

            $table->foreign('exam_id')
                ->references('id')
                ->on('exams')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
