<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lead extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','first_name','last_name','email','mobile','university','latitude','longitude','longitude','utm_campaign','utm_source','crm_status','whatsApp_status','message_status','mail_status','created_at',
    ];
}
