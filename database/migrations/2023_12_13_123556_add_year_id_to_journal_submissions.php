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
        Schema::table('journal_submissions', function (Blueprint $table) {
            $table->foreignId('year_id')->constrained('years')->onDelete('cascade');
            $table->string('citation_title')->nullable();
            $table->string('citation_issue')->nullable();
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
