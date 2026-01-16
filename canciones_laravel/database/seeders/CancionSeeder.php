<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CancionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cancions')->insert([
            [
                'titulo' => 'Bohemian Rhapsody',
                'album' => 'A Night at the Opera',
                'grupo' => 'Queen',
                'anio' => '1975',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Hotel California',
                'album' => 'Hotel California',
                'grupo' => 'Eagles',
                'anio' => '1976',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => "Don't Stop Believin'",
                'album' => "Journey",
                'grupo' => "Journey",
                "anio" => "1978",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}