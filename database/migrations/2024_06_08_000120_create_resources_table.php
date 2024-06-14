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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('content_id')->constrained()->onDelete('cascade');
            $table->string('resource_title', 255)->nullable()->comment('Provide the primary title of the resource.');
            $table->string('subtitle', 255)->nullable()->comment('Optionally provide the subtitle of the resource.');
            $table->dateTime('creation_date')->nullable()->comment('Provide date on which the resource was created.');
            $table->dateTime('publication_date')->nullable()->comment('Provide date on which the resource was first published.');
            $table->dateTime('edit_date')->nullable()->comment('Provide date on which the resource was last edited.');
            $table->text('abstract')->nullable()->comment('Provide a short abstract-like summary.');
            $table->string('author_profile', 255)->nullable()->comment('Provide the URL to the author\'s online profile.');
            $table->string('author_name', 255)->nullable()->comment('Provide the author name, or names. Used for various metadata, such as Schema.org.');
            $table->string('publisher', 255)->nullable()->comment('Provide the name of the publisher of the resource.');
            $table->string('isbn', 13)->nullable()->comment('If this resource is a book, enter the ISBN code.');
            $table->string('original_title', 255)->nullable()->comment('If this is a translated resource, provide the original primarytitle.');
            $table->string('original_subtitle', 255)->nullable()->comment('If this is a translated resource, provide the original subtitle.');
            $table->dateTime('original_publication_date')->nullable()->comment('If this is a translated resource, provide the original publication date.');
            $table->string('translators', 255)->nullable()->comment('If this is a translated resource, provide the names of the translator.');
            $table->string('resource_url', 255)->comment('If this is a downloadable resource, provide the location.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
