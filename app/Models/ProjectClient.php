<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectClient extends Model
{
         protected $table = 'project_client_table';

        protected $fillable = [
            'project_name',
            'address',
            'phone',
            'email',
            'website',
            'contact_person',
            'start_date',
            'end_date',
            'description',
        ];

}
