<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','slug','courses','banner_image','location','city','state','featured_image','excerpt','description','title','enable_otp','meta_description','schema','robots','canonical','utm_campaign','utm_source','lead_type','status','created_at',
    ];
}
