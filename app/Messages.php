<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
   protected $fillable = [
        'client_id', 'client_name','expert_id','expert_name','message_body','attachment_ref','attachment_name','message_type'
    ];
}
