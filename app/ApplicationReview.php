<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationReview extends Model
{
    //
    protected $fillable = [
        'expert_id', 'form_id','rating','comment'
    ];
}
