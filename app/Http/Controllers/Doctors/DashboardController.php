<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public  function index()
    {
        $patient = Patient::count();
        $doctor = Doctor::count();
        $appointment = Appointment::count();
        $appointment_pending = Appointment::where('status', 'pending')->count();
        $appointment_today = Appointment::where('status', 'pending')->count();
        return view('backend.doctors.dashboard',
            compact('patient', 'doctor', 'appointment', 'appointment_today', 'appointment_pending'));
    }
}
