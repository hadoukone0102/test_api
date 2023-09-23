<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Client::factory()->count(10)->hasFacture(9)->create();
        Client::factory()->count(20)->hasFacture(10)->create();
        Client::factory()->count(15)->hasFacture(5)->create();
        Client::factory()->count(5)->create();
    }
}
