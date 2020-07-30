<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $connection = 'pgsql-bolsa_empleo';
    protected $fillable = [
        'user_id',
        'identity',
        'nature',
        'email',
        'trade_name',
        'comercial_activity',
        'phone',
        'cell_phone',
        'web_page',
        'address',
        'state',
        
    ];
}