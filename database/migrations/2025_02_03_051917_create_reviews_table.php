<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            // Link review to a project
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            // Reviewer’s name (Company/Individual Name)
            $table->string('reviewer_name');
            $table->text('review_message');
            $table->unsignedTinyInteger('rating'); // Rating 1-5
            $table->string('google_review_link')->nullable();
            $table->string('profile_picture')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
