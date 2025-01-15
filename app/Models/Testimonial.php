<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','featured_image','name','course_id','dasignation','placed_at','comment','video','model','model_id','status','created_at'
    ];
}
