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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('content_id')->constrained()->onDelete('cascade');
            $table->string('article_title', 255)->nullable()->comment('Provide the primary title of the article.');
            $table->string('subtitle', 255)->nullable()->comment('Optionally provide the subtitle of the article.');
            $table->dateTime('creation_date')->nullable()->comment('Provide date on which the article was created.');
            $table->dateTime('publication_date')->nullable()->comment('Provide date on which the article was first published.');
            $table->dateTime('edit_date')->nullable()->comment('Provide date on which the article was last edited.');
            $table->text('abstract')->nullable()->comment('Provide a short abstract-like summary.');
            $table->string('author_profile', 255)->nullable()->comment('Provide the URL to the author\'s online profile.');
            $table->string('author_name', 255)->nullable()->comment('Provide the author name, or names. Used for various metadata, such as Schema.org.');
            $table->string('view_name', 255)->nullable()->comment('Provide the name of the view containing the article\'s contents (view filename, minus the \'.blade.php\').');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
