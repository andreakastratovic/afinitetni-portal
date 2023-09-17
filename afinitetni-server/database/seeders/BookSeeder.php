<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert sample data into the books table
        DB::table('books')->insert([
            'title' => 'Sample Book 1',
            'description' => 'This is the description of Sample Book 1.',
            'author' => 'Author 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more records as needed
    }
}
