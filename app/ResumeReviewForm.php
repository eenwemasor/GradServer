<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeReviewForm extends Model
{
    protected $fillable = [
        'name', 'industry_applied_for', 'summary_of_interest',"curriculum_vitae",'package','has_expert',"form_id","status","completed"
    ];
}
