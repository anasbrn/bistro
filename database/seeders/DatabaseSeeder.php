<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Plates;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Plates::create([
            'id' => 1,
            'plateName' => 'Product1',
            'description' => 'This is the description of the product1',
            'image' => 'test',
            'category' => 'breakfast'
        ]);

        Plates::create([
            'id' => 2,
            'plateName' => 'Product2',
            'description' => 'This is the description of the product2',
            'image' => 'teeest',
            'category' => 'lunch'
        ]);

        Plates::create([
            'id' => 3,
            'plateName' => 'Product3',
            'description' => 'This is the description of the product3',
            'image' => 'vvrv',
            'category' => 'lunch'
        ]);
    }
}
