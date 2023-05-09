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
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prénom');
            $table->string('Email')->unique();
            $table->date('Date_de_naissance');
            $table->string('Filière');
            $table->string('Téléphone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables');
    }
};

//foreign key

// $table->unsignedBigInteger('user_id');

// $table->foreign('user_id')
//       ->references('id')
//       ->on('users')
//       ->onDelete('cascade');