<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\login as Authenticatable;

class login extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'email',
        'password'
    ];
}
