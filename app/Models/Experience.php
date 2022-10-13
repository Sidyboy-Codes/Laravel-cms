<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_logo',
        'company_name',
        'position',
        'job_role',
        'start_date',
        'end_date'
    ];

}
