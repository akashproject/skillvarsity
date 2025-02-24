<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'gallery';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id','name','slug','excerpt','description','enable_otp','title','meta_description','schema','robots','canonical','utm_campaign','utm_source','status','created_at'
    ];
}
