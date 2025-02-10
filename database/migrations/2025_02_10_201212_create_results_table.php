<?php

use App\Models\School;
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
        Schema::create('results', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(School::class)->constrained();
            $table->string('center_number');
            $table->date('examination_date');
            $table->string('ple_grade')->nullable();
            $table->string('uce_grade')->nullable();
            $table->string('uace_grade')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->innoDb();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
