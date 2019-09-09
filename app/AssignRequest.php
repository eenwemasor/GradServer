<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignRequest extends Model
{

	protected $fillable = [
        'expert_id', 'form_id','package'
    ];
    
}
