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
        Schema::create('question_img', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:fakeNews/database/migrations/2024_01_18_115253_create_question_img.php
            $table->longText("question");
            $table->boolean("correct");
=======
            $table->string("question",250);
            $table->boolean("correct"); // 1 = True, 0 = false
>>>>>>> 109e0825e1f8e3e6d46b3678cf777af717f2231d:fakeNews/database/migrations/2024_01_18_115253_create_question_img_table.php
            $table->longText("realNew");
            $table->string("img")->nullable();

        });

    }

    public function down()
    {
        Schema::dropIfExists('question_img');
    }
};
