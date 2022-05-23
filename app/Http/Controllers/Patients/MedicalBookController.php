<?php

namespace App\Http\Controllers\Patients;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicalBookController extends Controller
{
    //
    public function index()
    {
        $patient = Patient::where('id', Auth::user()->id)->firstOrFail();
        $consultations = Consultation::where('patient_id',$patient->id)
            ->latest()->get();
        return view('backend.patients.medical-book.index', compact('patient', 'consultations'));
    }
}
