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

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function consultations(){
        return $this->hasMany(Consultation::class);
    }
}
