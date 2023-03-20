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
        Schema::create('affaires', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('nomber');
            $table->integer('prix');
            $table->string('adversaire');
            $table->string('jugement');
            $table->date('jugementDate');
            $table->string('type');
            $table->boolean('etat');
            $table->foreign('user_id')->references('users');
            $table->foreign('client_id')->references('clients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_affaire');
    }
};
