<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','slug','excerpt','featured_image','title','enable_otp','meta_description','schema','robots','canonical','utm_campaign','utm_source','lead_type','status','created_at',
    ];
}
