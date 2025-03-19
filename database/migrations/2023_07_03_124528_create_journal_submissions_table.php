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
        Schema::create('journal_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('author_name')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->string('institute_organization')->nullable();
            $table->string('country')->nullable();
            $table->string('title')->nullable();
            $table->string('abstract')->nullable();
            $table->string('file')->nullable();
            $table->string('status')->nullable();
            $table->string('email_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journal_submissions');
    }
};
