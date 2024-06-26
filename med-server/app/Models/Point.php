<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactor
    protected $table = 'points';
    protected $perPage = 20;

    protected $fillable = ['name'];
}
