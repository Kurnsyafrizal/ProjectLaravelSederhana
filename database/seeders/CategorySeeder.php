<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
            'category' => 'Fiction',
            'slug' => 'fiction_category'
        ]);

        category::create([
            'category' => 'Science',
            'slug' => 'science_category'
        ]);

        category::create([
            'category' => 'Computer',
            'slug'=> 'computer_category'
        ]);
        category::create([
            'category' => 'Politic',
            'slug'=> 'politic_category'
        ]);
    }
}
