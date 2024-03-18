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
            $table->string("question",250);
            $table->boolean("correct");
            $table->longText("realNew");
            $table->binary("img")->nullable();
            
        });
        $sql = 'alter table question_img change img img longblob';
        DB::statement($sql);
    }

    public function down()
    {
        Schema::dropIfExists('question_img');
    }
};
