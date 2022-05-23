<?php

namespace App\Http\Controllers\Patients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public  function index()
    {
        $consultation = Auth::user()->consultations->count();
        $appointment = Auth::user()->appointments->count();
        return view('backend.patients.dashboard', compact('consultation', 'appointment'));
    }
}
