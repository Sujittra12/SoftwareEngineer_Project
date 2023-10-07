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
        Schema::create('courses', function (Blueprint $table) {
            //id course
            $table->id('course_id');
            //รก ีหำพ
            $table->foreignId('id_user');
            $table->foreign('id_user')->references('id')->on('users');

            $table->char('course_code',11);
            $table->string('course_name');
            $table->string('course_des');//รายละเอียดเพิ่มเติม
            $table->tinyInteger('course_term');
            $table->char('course_year',4);


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
