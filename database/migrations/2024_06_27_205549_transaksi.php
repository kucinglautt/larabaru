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
        Schema::create("transaksi", function (Blueprint $table) {
            $table->id("id");
            $table->foreignId("id_user")->references("id")->on("users");
            $table->foreignId("id_admin")->references("id")->on("admin");
            $table->foreignId("id_barang")->references("id")->on("barang");
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