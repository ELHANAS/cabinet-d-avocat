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
            $table->timestamp('email_v')->nullable();
            $table->string('password');
            $table->string('tel')->default("18378914");
            $table->string('fonction')->default("avocat");
            $table->boolean('role')->default(0);
            $table->string("photo")->default("360_F_503577073_y4ZwKcQttFbUut0A7InyK8LhS3ObKL2t.jpg");
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
