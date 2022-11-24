<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Song;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Rian Muhammad Afriansyah',
            'email' => 'rianma1333@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password')
        ]);
        Song::create([
            'judul' => 'RADWIMPS - カナタハルカ',
            'lirik' => 'asd',
            'link' => 'TDi-hGRYX6g',
            'slug' => '019248710497',
        ]);
    }
}
