<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    protected $table = 'sponsors';
    protected $fillable = [
        'company_name',
        'company_contact',
        'primary_address',
        'city',
        'postal',
        'email',
        'phone',
        'img',
        'project_img',
        'bio'
    ];
}
