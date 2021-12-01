<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\books;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
          books::create([
            'category_id' => '1',
            'tittle' => 'Harry Potter'
          ]);
          
          books::create([
            'category_id' => '2',
            'tittle' => 'A Brief History of Time'
          ]);
          
          books::create([
            'category_id' => '3',
            'tittle' => 'Firebase : Membangun Aplikasi Berbasis Android'
          ]);
          
          
          books::create([
            'category_id' => '3',
            'tittle' => 'Semua Bisa Menjadi Programmer Laravel Basic'
          ]);
          
          books::create([
            'category_id' => '1',
            'tittle' => 'Mindset'
          ]);
          
          books::create([
            'category_id' => '2',
            'tittle' => 'Memahami Sains Modern: Bimbingan Untuk Kaum Muda Muslim'
          ]);
          
          
          books::create([
            'category_id' => '3',
            'tittle' => 'Semua Bisa Menjadi Programmer JavaScript & Node.js'
          ]);
          
          books::create([
            'category_id' => '1',
            'tittle' => 'Self Theories'
          ]);
          
          books::create([
            'category_id' => '2',
            'tittle' => 'Buku Islam & Sains; Paradigma Integrasi'
          ]);
          
          books::create([
            'category_id' => '1',
            'tittle' => 'Jika Kita Tak Pernah Jadi Apa-Apa'
          ]);
        
    }
}
