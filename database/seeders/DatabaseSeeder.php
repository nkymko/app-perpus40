<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'uuid' => Str::uuid(),
            'nama' => 'Administrator',
            'email' => 'admin',
            'password' => bcrypt('@admin'),
            'role' => 'admin',
        ]);

        DB::table('genres')->insert([
            [
                'nama' => 'Sejarah',
                'slug' => 'sejarah'
            ],
            [
                'nama' => 'Fiksi',
                'slug' => 'fiksi'
            ],
            [
                'nama' => 'Non Fiksi',
                'slug' => 'non-fiksi'
            ],
            [
                'nama' => 'Sastra',
                'slug' => 'sastra'
            ],
            [
                'nama' => 'Humor',
                'slug' => 'humor'
            ],
            [
                'nama' => 'Pendidikan',
                'slug' => 'pendidikan'
            ],

        ]);

        
    }
}
