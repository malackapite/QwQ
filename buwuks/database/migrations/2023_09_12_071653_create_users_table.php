<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id("user_id");
            $table->string("name",32);
            $table->string("email",120)->unique();
            $table->string('password');
            $table->boolean("permisson")->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
        User::create([
            "name" => "Amongus",
            "email" => "sus@sus.sus",
            "password" => "Nincs út"
        ]);
        User::create([
            "name" => "aaaaaaaa",
            "email" => "aaaaa@sus.sus",
            "password" => "Bruh, Nincs út"
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
