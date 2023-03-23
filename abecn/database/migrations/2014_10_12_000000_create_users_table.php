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
            $table->foreignId('group_id');
            $table->foreignId('membership_id');
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('email', 40)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->char('phone');
            $table->date('dob');
            $table->string('primary_address');
            $table->string('secondary_address');
            $table->string('city', 20);
            $table->char('postal');
            $table->string('display_name');
            $table->string('organization');
            $table->string('specialty');
            $table->timestamp('date_registered');
            $table->boolean('active_yn');
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
