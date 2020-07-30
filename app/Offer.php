<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $connection = 'pgsql-bolsa_empleo';
    protected $fillable = [
        'company_id',
        'code',
        'contact',
        'email',
        'phone',
        'cell_phone',
        'contract_type',
        'position',
        'broad_field',
        'specific_field',
        'training_hours',
        'experience_time',
        'remuneration',
        'working_day',
        'number_jobs',
       'start_date',
       'finish_date',
        'activities',
        'aditional_information',
        'city',
        'province',
    ];
}