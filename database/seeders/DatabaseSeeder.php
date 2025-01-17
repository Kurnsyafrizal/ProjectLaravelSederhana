<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\books;
use App\Models\category;
use App\Models\details;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            CategorySeeder::class,
            BookSeeder::class,
            DetailSeeder::class,
        ]);

    }
}
