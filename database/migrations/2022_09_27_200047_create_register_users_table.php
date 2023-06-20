<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_users', function (Blueprint $table) {
            $table->id();
            $table->string("formNumber")->unique();
            $table->string("name");
            $table->string("date_of_birth");
            $table->string("gender");
            $table->string("status");
            $table->string("student_number")->nullable();
            $table->string("course")->nullable();
            $table->string("image");
            $table->string("email");
            $table->string("telephone")->unique();
            $table->string("address");
            $table->string("skills")->nullable();
            $table->string("dues")->nullable();
            $table->string("accept");
            $table->string("terms");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_users');
    }
};
