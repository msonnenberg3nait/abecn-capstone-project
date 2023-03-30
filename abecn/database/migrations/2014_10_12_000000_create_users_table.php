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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->default(2); // regular user
            $table->foreignId('membership_id')->default(2); // individual
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('display_name', 30)->unique();
            $table->string('password');
            $table->date('dob');
            $table->string('organization', 60)->nullable();
            $table->string('specialty', 60)->nullable();
            $table->string('email', 40)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->varchar('phone', 11)->nullable();
            $table->string('primary_address', 100)->nullable();
            $table->string('secondary_address', 100)->nullable();
            $table->string('city', 20)->nullable();
            $table->char('postal', 6)->nullable();
            $table->boolean('active_yn')->default(1); // active
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
