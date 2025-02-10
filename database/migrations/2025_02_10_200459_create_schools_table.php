<?php

use App\Models\District;
use App\Models\Region;
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
        Schema::create('schools', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(Region::class);
            $table->foreignIdFor(District::class);
            $table->string('name');
            $table->boolean('has_nursery');
            $table->boolean('has_primary');
            $table->boolean('has_uce');
            $table->boolean('has_uace');
            $table->string('email')->unique();
            $table->string('website')->unique();
            $table->string('phone')->unique();
            $table->string('address');
            $table->string('city');
            $table->string('zip');
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('schools');
    }
};
