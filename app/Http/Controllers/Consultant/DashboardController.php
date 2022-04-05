<?php

namespace App\Http\Controllers\Consultant;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\Patient;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public  function index()
    {
        $patient = Patient::count();
        $doctor = Doctor::count();
        return view('backend.consultants.dashboard', compact('patient', 'doctor'));
    }
}
