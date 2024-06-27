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
        Schema::create("admin", function (Blueprint $table) {
            $table->id("id");
            $table->string("nama");
            $table->string("username", 45);
            $table->string("password", 45);
            $table->foreignId("id_user")->references("id")->on("users");
            $table->timestamps();
        });
    }
       

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("antrian");
    }
};