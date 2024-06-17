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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug', 255)->unique()->comment('Provide the URL part specific for this content (for instance: "new-york-architecture-1800s").');
            $table->string('meta_title', 60)->nullable()->comment('Provide a title to show on search result pages like Google.');
            $table->string('meta_description', 160)->nullable()->comment('Provide a short summary to show on search result pages like Google.');
            $table->string('robots_tag_content', 255)->nullable()->comment('Provide contents for the HTML robots meta tag. View specifications on: https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag.');
            $table->string('rel_canonical', 255)->nullable()->comment('Provide the one, \'official\' URL of this content.');
            $table->string('rel_icon', 255)->nullable()->comment('Provide absolute URL to the favicon file.');
            $table->string('lang_iso_639_1', 2)->nullable()->comment('Provide the two-character ISO language code for this content.');
            $table->string('locale', 5)->index()->nullable()->comment('Provide the locale for this content (for instance: nl_NL, en_EN).');
            $table->boolean('private')->default(false)->comment('Set to true to mark as private post.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
