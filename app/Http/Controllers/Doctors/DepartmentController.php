<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    //
    public function all(){
        $patients = Patient::where('department_id', Auth::user()->speciality)->latest()->get();
        $title = " All Patient of the department ".Auth::user()->department->name;
        return view('backend.doctors.department.all', compact('patients', 'title'));
    }

    public function receive(){
        $patients = Patient::where('department_id', Auth::user()->speciality)
            ->where('receive', true)
            ->latest()
            ->get();
        $title = " All Patient of the department ".Auth::user()->department->name .' Receive';
        return view('backend.doctors.department.all', compact('patients', 'title'));
    }

    public function waiting(){
        $patients = Patient::where('department_id', Auth::user()->speciality)
            ->where('receive', false)
            ->latest()
            ->get();
        $title = " All Patient of the department ".Auth::user()->department->name .' Waiting';
        return view('backend.doctors.department.all', compact('patients', 'title'));
    }


}
