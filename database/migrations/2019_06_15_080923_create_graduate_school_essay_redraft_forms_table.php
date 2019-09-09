<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduateSchoolEssayRedraftFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduate_school_essay_redraft_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('employment_most_relevant_to_you_masters_application');
            $table->string('typical_achievements');
            $table->string('scholarships_and_award');
            $table->string('undegraduate_level_courses_master');
            $table->string('project_dissertation_name_master');
            $table->string('most_recent_undergraduate');
            $table->string('undergraduate_level_grade');
            $table->string('result_ranking');
            $table->string('undegraduate_level_courses_phd');
            $table->string('project_dissertation_name_phd');
            $table->longText('leadership_experience');
            $table->boolean('interpersonal_skills');
            $table->boolean('presentation_skills');
            $table->boolean('programming');
            $table->boolean('microsoft_excel');
            $table->boolean('java');
            $table->string('other_skills');
            $table->longText('extracurricular_activities');
            $table->longText('professional_workshops');
            $table->longText('academic_conferences_attended');
            $table->string('certificate');
            $table->boolean('english');
            $table->boolean('french');
            $table->string('german');
            $table->string('spanish');
            $table->string('nigeria_languages');
            $table->string('other_languages');
            $table->string('masters_intended_area_of_research');
            $table->string('university_of_choice_and_course');
            $table->longText('modules_interested');
            $table->longText('teaching_personel_contacted');
            $table->longText('summary_of_interest');
            $table->longText('post_study_goal');
            $table->string('referee');
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
        Schema::dropIfExists('graduate_school_essay_redraft_forms');
    }
}
