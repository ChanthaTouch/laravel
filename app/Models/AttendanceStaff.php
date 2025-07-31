<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendanceStaff extends Model
{
    protected $table = 'table_attendance';
     public $timestamps = false; 
    protected $fillable = [
        'staff_id',
        'name_staff',
        'gender',
        'department',
        'scan_in',
        'scan_out',
        'leave_type',
        'from_date',
        'to_date',
        'shift_type',
        'period'

    ];
}
