<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimesheetStaff extends Model
{
    protected $table = 'timesheet_staff_table';
    
    protected $fillable= [
        'id_staff',
        'name_staff',
        'project',
        'contract',
        'component',
        'phase',
        'chargeable_time_mon',
        'chargeable_time_tue',
        'chargeable_time_wed',
        'chargeable_time_thu',
        'chargeable_time_fri',
        'chargeable_time_sat',
        'chargeable_time_sun',
        'chargeable_time_total',
    ];
       public $timestamps = false;
}
