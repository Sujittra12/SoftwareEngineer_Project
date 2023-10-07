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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            // id User จากตาราง user
            $table->foreignId('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            //เก็บรหัสนศ.
            $table->char('std_id',11)->comment('รหัสนักศึกษา');
            $table->string('');


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
