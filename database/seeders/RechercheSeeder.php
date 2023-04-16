<?php

namespace Database\Seeders;

use App\Models\Recherche;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RechercheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $research =Recherche::create([
        'id'=>1,
        'name'=>'Intelligence Artificielle'
        ]);
    }
}
