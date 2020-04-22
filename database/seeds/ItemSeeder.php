<?php

use App\Items;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Items::create([
            'title' => 'Get the task description',
            'done' => 1
        ]);
        Items::create([
            'title' => 'Make the API',
        ]);
        Items::create([
            'title' => 'Test the API',
        ]);
        Items::create([
            'title' => 'Get the API for the review',
        ]);
    }
}
