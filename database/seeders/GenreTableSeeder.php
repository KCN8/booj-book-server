<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'name' => 'Mysteries & Thrillers'
        ]);

        Genre::create([
            'name' => 'Science Fiction'
        ]);

        Genre::create([
            'name' => 'Fantasy'
        ]);

        Genre::create([
            'name' => 'Technology'
        ]);

        Genre::create([
            'name' => 'History'
        ]);

        Genre::create([
            'name' => 'Business'
        ]);
    }
}
