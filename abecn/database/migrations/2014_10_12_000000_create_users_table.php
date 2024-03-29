<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->default(2); // user
            $table->foreignId('membership_id')->default(3); // inactive
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('profile_img')->nullable();
            $table->string('display_name', 30)->unique();
            $table->string('password');
            $table->date('dob');
            $table->string('organization', 60)->nullable();
            $table->string('specialty', 60)->nullable();
            $table->string('email', 40)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->char('phone', 11)->nullable();
            $table->string('pcity', 40)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
