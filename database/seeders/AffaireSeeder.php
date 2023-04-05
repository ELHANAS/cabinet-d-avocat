<?php

namespace Database\Seeders;

use App\Models\Affaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AffaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Affaire::factory(20)->create() ;
    }

}
