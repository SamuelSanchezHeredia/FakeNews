<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Video::factory()->create([
        'videoUrl' => '',
        'buttonOption1' => 'Fake',
        'buttonOption2' => 'Fact',
        'videoUrlOption1' => '',
        'videoUrlOption2' => '',

        ]);
    }
}
