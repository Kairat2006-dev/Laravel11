<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('secind_name')->nullable();
            $table->string('third_name')->nullable();
            $table->string('phone')->unique();
            $table->unsignedInteger('status');
            $table->unsignedSmallInteger('age');
//            $table->foreignId('user_id')->index()->constrained('users');
            $table->morphs('profileable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
