<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GraduateSchoolStatementReviewForm extends Model
{

	protected $fillable = [
        'name', 'university_and_course_applied_for', 'summary_of_interest',"curriculum_vitae",'package','has_expert',"form_id","status","completed"
    ];
}
