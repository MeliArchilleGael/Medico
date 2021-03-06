<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use HasFactory;

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $guarded = [];

    public function consultations(){
        return $this->hasMany(Consultation::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

}
