<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public  function index()
    {
        dd('present');
        return view('backend.doctors.dashboard');
    }
}
