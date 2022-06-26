<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'firstName',
        'lastName',
        'companyID',
        'email',
        'phone'
    ];
}