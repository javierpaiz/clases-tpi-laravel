<?php

namespace Database\Seeders;

use App\Models\Empleados;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Empleados::factory()->count(10)->create();
    }
}
