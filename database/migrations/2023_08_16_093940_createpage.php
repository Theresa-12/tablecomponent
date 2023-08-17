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
        Schema::create('page_contents', function (Blueprint $table) {
            $table->id();
            $table->string('Title')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->string('projects')->nullable()->change();
            $table->string('outcomes')->nullable()->change();
            $table->string('Days')->nullable()->change();
            $table->string('schedule-Time')->nullable()->change();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
