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
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('prenom');
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->integer('role'); 
        //     // $table->unsignedBigInteger('encadrant')->nullable()->default(NULL);
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     // $table->string('img')->nullable()->default(NULL);
        //     $table->timestamps();
        
        // });

        Schema::create('affect_equipe_member', function (Blueprint $table) {
            $table->id();
            $table->integer("FK_member");
            $table->integer("FK_equipe");

            $table->foreign('FK_member')
            ->references('id')
            ->on('member');
            $table->foreign('FK_equipe')
            ->references('id')
            ->on('equipes');  
        
         });
        // Schema::create('affect_pub_member', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer("FK_pub");
        //     $table->integer("FK_member");

        //     $table->foreign('FK_member')
        //     ->references('id')
        //     ->on('member');
        //     $table->foreign('FK_pub')
        //     ->references('id')
        //     ->on('pubs');  
        
        // });

        // Schema::create('affect_event_member', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger("FK_event");
        //     $table->integer("FK_member");

        //     $table->foreign('FK_event')
        //     ->references('id')
        //     ->on('events');
        //     $table->foreign('FK_member')
        //     ->references('id')
        //     ->on('members');  
        
        // });
        // Schema::create('affect_prj_member', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger("FK_prj");
        //     $table->integer("FK_member");

        //     $table->foreign('FK_prj')
        //     ->references('id')
        //     ->on('projects');
        //     $table->foreign('FK_member')
        //     ->references('id')
        //     ->on('members');  
        
        // });
        // Schema::create('affect_event_axe', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer("FK_axe");
        //     $table->bigInteger("FK_event");

        //     $table->foreign('FK_axe')
        //     ->references('id')
        //     ->on('axes');
        //     $table->foreign('FK_event')
        //     ->references('id')
        //     ->on('events');  
        
        // });
        Schema::create('affect_event_pub', function (Blueprint $table) {
            $table->id();
            $table->integer("FK_pub");
            $table->bigInteger("FK_event");

            $table->foreign('FK_pub')
            ->references('id')
            ->on('pubs');
            $table->foreign('FK_event')
            ->references('id')
            ->on('events');  
        
         });
        //
        Schema::create('affect_axe_pub', function (Blueprint $table) {
            $table->id();
            $table->integer("FK_pub");
            $table->bigInteger("FK_axe");

            $table->foreign('FK_pub')
            ->references('id')
            ->on('pubs');
            $table->foreign('FK_axe')
            ->references('id')
            ->on('axes');  
 
        });
        Schema::create('affect_axe_prj', function (Blueprint $table) {
            $table->id();
            $table->integer("FK_prj");
            $table->bigInteger("FK_axe");

            $table->foreign('FK_prj')
            ->references('id')
            ->on('projects');
            $table->foreign('FK_axe')
            ->references('id')
            ->on('axes');  
 
        });
        //
        Schema::create('affect_event_prj', function (Blueprint $table) {
            $table->id();
            $table->integer("FK_prj");
            $table->bigInteger("FK_event");

            $table->foreign('FK_prj')
            ->references('id')
            ->on('projects');
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
