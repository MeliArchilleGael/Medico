<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patients = Doctor::latest()->get();
        return view('backend.doctors.doctors.index', compact('patients'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
        $departments = Department::latest()->get();
        return view('backend.doctors.doctors.create', compact('departments'));

    }
    private function validation($request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'speciality' => 'required',
            /*'date_of_birth' => 'required|date',*/
            /*'weight'=>'numeric',
            'height'=>'numeric',*/
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        //
        $array = [1,2,3,4,5,6,7,8,9];

        $this->validation($request);
        $email = $request->input('email');

        if(isset($email)){
            $request->validate(['email'=>'email|unique:patients']);
        }


        try {
            $patient = Doctor::create(array_merge($request->only(['name', 'blood_group', 'speciality','address', 'telephone', 'height', 'weight', 'department_id']), [
                'email' => isset($email) ? $email : Str::slug($request->input('name')) . '@follow.com',
                'password' => Hash::make('password'),
                'matriculate' => '22FOW' . collect(Arr::random($array,5))->implode(''),
                'date_of_birth' => $request->input('date_of_birth') ?? now(),
            ]));
        } catch (\Exception $e) {
            return back()->with('message', 'An Error Occur: ' . $e->getMessage());
        }


        return redirect()->route('doctors.doctors.index')
            ->with('message', 'Doctor create successfully Matriculate:' . $patient->matriculate)
            ->with('type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //
        Doctor::where('id', $id)->firstOrFail()->delete();
        return back()->with('message','Delete Successfully');
    }
}
