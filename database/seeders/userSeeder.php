<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User ;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            "name" => "El handouz anas",
            "email" => "anaselhandouz@gmail.com" ,
            "password" => Hash::make("anas1998") ,
            "tel" => "0714072027",
            "fonction" => "Avocat" ,
            "role" => 1]);
    }
}
