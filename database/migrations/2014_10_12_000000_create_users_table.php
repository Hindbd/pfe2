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

        Schema::create('affect_equipe_user', function (Blueprint $table) {
            $table->id();
            $table->integer("FK_user");
            $table->integer("FK_equipe");

            $table->foreign('FK_user')
            ->references('id')
            ->on('users');
            $table->foreign('FK_equipe')
            ->references('id')
            ->on('equipes');  
        
        });
        Schema::create('affect_equipe_axe', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("FK_axe");
            $table->integer("FK_equipe");

            $table->foreign('FK_axe')
            ->references('id')
            ->on('axes');
            $table->foreign('FK_equipe')
            ->references('id')
            ->on('equipes');  
        
        });
        Schema::create('affect_event_user', function (Blueprint $table) {
            $table->id();
            $table->integer("FK_user");
            $table->bigInteger("FK_event");

            $table->foreign('FK_user')
            ->references('id')
            ->on('users');
            $table->foreign('FK_event')
            ->references('id')
            ->on('events');  
        
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
