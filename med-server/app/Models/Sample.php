<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;

    protected $table = 'samples';
    protected $perPage = 20;

    protected $fillable = ['name', 'code', 'biomaterial', 'container'];
}
