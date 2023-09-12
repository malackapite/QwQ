<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Book;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id("book_id");
            $table->string("author",32);
            $table->string("title", 150);
            $table->integer("pieces")->default(50);
            $table->timestamps();
        });
        Book::create([
            "author" => "Sussy Baka",
            "title" => "Amongus",
            "pieces" => 69420
        ]);
        Book::create([
            "author" => "Nin Csen",
            "title" => "{} + []"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
