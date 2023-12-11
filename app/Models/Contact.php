<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'company_name',
        'company_phone',
        'company_fax',
        'company_address',
        'email',
        'comment'
    ];
}
