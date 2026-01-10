<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("shopping_list_user", function (Blueprint $table) {
            $table->foreignId('shopping_list_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->enum('role', ['owner','member']);
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
