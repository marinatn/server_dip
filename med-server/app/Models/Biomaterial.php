<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biomaterial extends Model
{
    use HasFactory;

    protected $table = 'biomaterials';
    protected $perPage = 20;

    protected $fillable = ['name'];
}
