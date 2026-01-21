<?php

use App\Models\Film;
use App\Models\Platforme;
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
        Schema::create('film_platforms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Film::class);
            $table->foreignIdFor(Platforme::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film_platforms');
    }
};
