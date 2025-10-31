<?php

namespace Database\Seeders;

use App\Models\Departamentos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Departamentos::factory()->count(5)->create();
    }
}
