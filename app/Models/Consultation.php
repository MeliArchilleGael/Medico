<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function observations(){
        return $this->hasMany(Observation::class);
    }

    protected $with = ['prescribedExams','prescribedDrugs'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function prescribedExams(){
        return $this->hasMany(PrescribedExam::class);
    }

    public function prescribedDrugs(){
        return $this->hasMany(PrescribedDrug::class);
    }
}
