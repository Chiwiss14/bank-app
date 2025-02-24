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
        Schema::create('bank_cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('card_number')->unique();
            $table->string('card_holder_name');
            $table->string('expiry_date'); // Format: MM/YY
            $table->string('cvv');
            $table->string('card_type'); // e.g., Debit, Credit, etc.
            $table->boolean('is_active')->default(true);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_cards');
    }
};
