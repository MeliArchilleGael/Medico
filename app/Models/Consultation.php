<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function observations()
    {
        return $this->hasMany(Observation::class);
    }

    protected $with = ['prescribedExams', 'prescribedDrugs', 'observations'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    //done by
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    //prescribe by
    public function prescribeBy()
    {
        return $this->belongsTo(Doctor::class, 'done_by');
    }

    public function prescribedExams()
    {
        return $this->hasMany(PrescribedExam::class);
    }

    public function prescribedDrugs()
    {
        return $this->hasMany(PrescribedDrug::class);
    }
}
