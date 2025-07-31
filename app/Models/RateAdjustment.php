<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RateAdjustment extends Model
{
    protected $table = 'rate_adjustment_table';
    protected $fillable = 
    [
        'staff_id',
        'name_staff',
        'position',
        'level',
        'grade',
        'category',
        'direct_manager',
        'indirect_manager',
        'last_updated',
        'previous_wage/day',
        'previous_wage/week',
        'adjustment_date',
        'reason',
        'approved_by',
        'requested_by',
        // 'requested_date',

    ];
     public $timestamps = false;
}
