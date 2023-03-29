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
            $table->integer('prix')->default(0);
            $table->string('adversaire')->nullable();
            $table->string('jugement')->nullable();
            $table->date('jugementDate')->nullable();

            $table->string('type');
            $table->boolean('etat')->default(0);
            $table->integer('id_client');
            $table->integer('id_user');
            $table->text("document")->nullable();
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
