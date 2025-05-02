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
        Schema::create('terbit', function (Blueprint $table) {
            $table->id();
            $table->text('penerbit');
            $table->text('pemilik');
            $table->text('alamatt');
            $table->date('tanggal_di_bangun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terbit');
    }
};
