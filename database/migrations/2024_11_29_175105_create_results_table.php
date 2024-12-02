<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id(); // Primary key: id
            $table->unsignedBigInteger('user_id'); // Foreign key to users.id
            $table->decimal('total_score', 5, 2)->default(0); // Total score out of 100
            $table->date('date_taken'); // Date the exam was taken
            $table->timestamps(); // created_at and updated_at

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
