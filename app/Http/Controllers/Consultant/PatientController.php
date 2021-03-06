<?php

namespace App\Http\Controllers\Consultant;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patients = Patient::latest()->with('consultations')->get();
        return view('backend.consultants.patients.index', compact('patients'));
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
        return view('backend.consultants.patients.create', compact('departments'));
    }

    private function validation($request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'department_id' => 'required',
            /*'date_of_birth' => 'required|date',*/
            /*'weight'=>'numeric',
            'height'=>'numeric',*/
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $array = [1,2,3,4,5,6,7,8,9];

        $this->validation($request);
        $email = $request->input('email');

        if(isset($email)){
            $request->validate(['email'=>'email|unique:patients']);
        }


        try {
            $patient = Patient::create(array_merge($request->only(['name', 'blood_group', 'address', 'telephone', 'height', 'weight', 'department_id']), [
                'email' => isset($email) ? $email : Str::slug($request->input('name')) . '@follow.com',
                'password' => Hash::make('password'),
                'matriculate' => '22FOW' . collect(Arr::random($array,5))->implode(''),
                'date_of_birth' => $request->input('date_of_birth') ?? now(),
            ]));
        } catch (\Exception $e) {
            return back()->with('message', 'An Error Occur: ' . $e->getMessage());
        }


        return redirect()->route('consultants.patients.index')
            ->with('message', 'Patient create successfully Matriculate:' . $patient->matriculate)
            ->with('type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $patient = Patient::where('id', $id)->with('consultations')->firstOrFail();
        return view('backend.consultants.medical-book.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $departments = Department::latest()->get();
        $patient = Patient::where('id', $id)->firstOrFail();
        return view('backend.consultants.patients.edit', compact('patient', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::where('id', $id)->firstOrFail();

        $this->validation($request);

        $email = $request->input('email');

        $patient->update(array_merge($request->only(['name', 'department_id', 'blood_group', 'address', 'telephone', 'height', 'weight']), [
            'email' => isset($email) ? $email : $request->input('name') . '@follow.com',
            'password' => Hash::make('password'),
            'date_of_birth' => $request->input('date_of_birth') ?? $patient->date_of_birth,
            'receive' => false,
        ]));

        return redirect()->route('consultants.patients.index')
            ->with('message', 'Patient register successfully')
            ->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //
        Patient::where('id', $id)->firstOrFail()->delete();
        return back();
    }
}
