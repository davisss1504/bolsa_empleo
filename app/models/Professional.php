<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identity',
        'first_name',
        'last_name',
        'email',
        'nationality',
        'civil_state',
        'birthdate',
        'gender',
        'phone',
        'address',
        'about_me',
        'state',
    ];

    public function offers()
    {
        return $this->belongsToMany('App\Models\Offer')->withTimestamps();
    }

    public function companies()
    {
        return $this->belongsToMany('App\Models\Company')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function academicFormations()
    {
        return $this->hasMany('App\Models\AcademicFormation');
    }

    public function abilities()
    {
        return $this->hasMany('App\Models\Ability');
    }

    public function languages()
    {
        return $this->hasMany('App\Models\Language');
    }

    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }

    public function professionalExperiences()
    {
        return $this->hasMany('App\Models\ProfessionalExperience');
    }

    public function professionalReferences()
    {
        return $this->hasMany('App\Models\ProfessionalReference');
    }


}
