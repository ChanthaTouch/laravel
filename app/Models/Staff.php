<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
      protected $table = 'staff_table';
        // Add 'email' and any other fields you plan to send in the request
        protected $fillable = [
            'name',
            'gender',
            'email',
            'date_of_birth',
            'address',
            'department',
            'division',
            'contract_type',
            'phone',
            'position'
        ];
    

}
