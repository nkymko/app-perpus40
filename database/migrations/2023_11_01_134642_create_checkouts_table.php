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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->uuid('user_id')->references('uuid')->on('users')->onDelete('cascade');
            $table->uuid('book_id')->references('uuid')->on('books')->onDelete('cascade');
            $table->date('tenggat')->nullable();
            $table->date('waktu_pengembalian')->nullable();
            $table->string('status')->default('pending');
            $table->boolean('arsip')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
