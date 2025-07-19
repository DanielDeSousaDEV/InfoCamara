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
        Schema::create('deputies', function (Blueprint $table) {
            $table->id();
            $table->integer('deputy_identifier');
            $table->string('name');
            $table->string('email');
            $table->string('party_acronym');
            $table->string('photo');
            $table->string('state_of_birth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deputies');
    }
};
