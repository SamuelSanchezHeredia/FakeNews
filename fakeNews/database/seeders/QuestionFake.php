<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionFake extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 200; $i++) {
            
            DB::table('question_img')->insert([
                'question' => $faker->word,
                'correct' => rand(0,1),
                'realNews' => $faker->,
                'img' => $faker->word,
                
            ]);
        }
    }
}
