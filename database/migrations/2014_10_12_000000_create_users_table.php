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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
            $table->enum('status', ['USER', 'STAFF', 'ADMIN'])->default('USER');
            $table->boolean('register')->default(0);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('nickname');
            $table->string('facebook');
            $table->string('lineid');
            $table->string('telephone');
            $table->integer('approve')->default(null);
            $table->enum('1_day', ['30 oct', '1 nov', '3 nov']);
            $table->string('1_song');
            $table->string('1_link');
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
