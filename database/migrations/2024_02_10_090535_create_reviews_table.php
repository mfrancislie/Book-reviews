<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * $table->unsignedBigInteger('book_title'); column for foreign key 
     * onDelete('cascade') is so for example whe the book is deleted from the database all related reviews should be remove to
     *  $table->foreignId('book_id')->constrained()->cascadeOnDelete(); short syntax for foreign key, it can automic setup for foreign key
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('book_title'); this a foreign key
            $table->text('review');
            $table->unsignedTinyInteger('rating');
            // $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

            $table->foreignId('book_id')->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
