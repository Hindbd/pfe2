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
            $table->string('prenom');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role'); 
            $table->unsignedBigInteger('encadrant')->nullable()->default(NULL);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('img')->nullable()->default(NULL);
            $table->timestamps();
        
        });
        Schema::create('affectation', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String("FK_axes");
            $table->string("FK_prj");
            $table->string("FK_equipe");
            $table->foreign('FK_axes')
            ->references('id')
            ->on('axes');
            $table->foreign('FK_prj')
            ->references('id')
            ->on('projects');
            $table->foreign('FK_equipe')
            ->references('id')
            ->on('equipes');  
        
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
