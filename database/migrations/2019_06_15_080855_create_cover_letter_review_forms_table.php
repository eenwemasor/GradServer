<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoverLetterReviewFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cover_letter_review_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('industry_applied_for');
            $table->longText('summary_of_interest');
            $table->string('curriculum_vitae');
            $table->string('package');
            $table->string('has_expert')->nullable();
            $table->string('form_id');
            $table->string('status');
            $table->boolean('completed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cover_letter_review_forms');
    }
}
