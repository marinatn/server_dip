<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analizator extends Model
{
    use HasFactory;

    protected $table = 'analizator';
    protected $perPage = 20;

    protected $fillable = ['short_name', 'type_interaction'];
}
