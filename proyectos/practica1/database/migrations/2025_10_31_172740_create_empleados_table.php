<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Empleados', function (Blueprint $table) {
            $table->id();
            $table->string("nombreEmpleado", 500);
            $table->string("correoEmpleado", 500);
            $table->foreignId("departamento_id")
            ->constrained("Departamentos")
            ->onDelete("restrict");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
