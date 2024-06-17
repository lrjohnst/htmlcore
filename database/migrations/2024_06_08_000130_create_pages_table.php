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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('content_id')->constrained()->onDelete('cascade');
            $table->string('page_title', 255)->nullable()->comment('Provide the title of the page.');
            $table->dateTime('publication_date')->nullable()->comment('');
            $table->dateTime('edit_date')->nullable()->comment('');
            $table->string('view_name', 255)->nullable()->comment('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
