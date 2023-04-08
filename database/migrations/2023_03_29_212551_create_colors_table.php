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
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->integer("id_user");
            $table->string("textHeader");
            $table->string("bgHeader");
            $table->string("textMain");
            $table->string("bgMain");
            $table->string("textBtn");
            $table->string("imageBody");
            $table->string("imageProfil");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colors');
    }
};
