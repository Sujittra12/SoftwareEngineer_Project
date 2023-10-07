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
        Schema::create('regis', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_user');
            $table->foreign('id_user')->references('id')->on('users');

            $table->foreignId('course_id');
            $table->foreign('course_id')->references('course_id')->on('courses');


            $table->foreignId('lab_id');
            $table->foreign('lab_id')->references('lab_id')->on('labs');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regis');
    }
};
