<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoverLetterRedraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cover_letter_redrafts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('workplace_1');
            $table->string('workplace_1_roles');
            $table->string('workplace_1_recognized_job');
            $table->string('workplace_2');
            $table->string('workplace_2_roles');
            $table->string('workplace_2_recognized_job');
            $table->string('supervised_before');
            $table->string('supervised_workplace');
            $table->string('recent_tertiary_institute');
            $table->string('number_of_employee_supervised_workplace_1');
            $table->string('number_of_employee_supervised_workplace_2');
            $table->string('recent_tertiary_institute_name');
            $table->string('scholarship_and_awards');
            $table->string('final_grade_school_1');
            $table->string('result_rank_school_1');
            $table->string('top_courses_school_1');
            $table->string('project_dissertation_name_school_1');
            $table->string('next_most_recent_tertiary_education');
            $table->string('final_grade_school_2');
            $table->string('result_rank_school_2');
            $table->string('top_courses_school_2');
            $table->longText('leadership_experience');
            $table->boolean('interpersonal_skills');
            $table->boolean('presentation_skills');
            $table->boolean('programming');
            $table->boolean('microsoft_excel');
            $table->boolean('java');
            $table->string('other_skills');
            $table->string('extracurricular_activities');
            $table->longText('professional_workshops');
            $table->string('certification_dates');
            $table->string('organization_contacted_before_hand');
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
        Schema::dropIfExists('cover_letter_redrafts');
    }
}
