<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ResearchOrder
 *
 * @property $id
 * @property $fio
 * @property $order_number
 * @property $cito
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ResearchOrder extends Model
{
    use HasFactory;

    protected $table = 'research_orders';

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['fio', 'order_number', 'cito'];


}
