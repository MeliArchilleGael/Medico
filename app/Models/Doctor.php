<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use HasFactory;

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $guarded = [];

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function consultations(){
        return $this->hasMany(Consultation::class);
    }

    public function department(){
        return $this->belongsTo(Department::class, 'speciality', 'id');
    }
}
