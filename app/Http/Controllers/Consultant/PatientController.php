<?php

namespace App\Http\Controllers\Consultant;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $patients = Patient::latest()->get();
        return view('backend.consultants.patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.consultants.patients.create');
    }

    private function validation($request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'date_of_birth' => 'required|date',
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
        $this->validation($request);

        $email = $request->input('email');

        $patient = Patient::create(array_merge($request->only(['name', 'blood_group', 'address', 'telephone', 'date_of_birth', 'height', 'weight']), [
            'email' => isset($email) ? $email : $request->input('name') . '@medico.com',
            'password' => Hash::make('password'),
        ]));


        return redirect()->route('consultants.patients.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $patient = Patient::where('id', $id)->firstOrFail();
        return view('backend.consultants.patients.edit', compact('patient'));
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

        $patient->update(array_merge($request->only(['name', 'blood_group', 'address', 'telephone', 'date_of_birth', 'height', 'weight']), [
            'email' => isset($email) ? $email : $request->input('name') . '@medico.com',
            'password' => Hash::make('password'),
        ]));

        return redirect()->route('consultants.patients.index');
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
