<?php

namespace App\Http\Controllers\Patients;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    //
    public function index()
    {
        $consultations = Consultation::where('patient_id', Auth::user()->id)
            ->latest()
            ->get();

        $title="List of All Consultations of the Patient: ";
        return view('backend.patients.consultation.index', compact('consultations', 'title'));
    }

    public function done(){
        $consultations = Consultation::where('patient_id', Auth::user()->id)
            ->where('status', 'LIKE', 'Done')
            ->latest()
            ->get();
        $title="List of All Consultations Done By the Patient: ";
        return view('backend.patients.consultation.index', compact('consultations', 'title'));
    }

    public function waiting(){

        $consultations = Consultation::where('patient_id', Auth::user()->id)
            ->where('status', 'LIKE', 'Not Done')
            ->latest()
            ->get();
        $title="List of All Pending Consultations of the Patient: ";
        return view('backend.patients.consultation.index', compact('consultations', 'title'));
    }
}
