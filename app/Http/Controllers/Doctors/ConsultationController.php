<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use App\Models\Doctor;
use App\Models\Observation;
use App\Models\PrescribedDrug;
use App\Models\PrescribedExam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $consultations = Consultation::where('doctor_id', Auth::user()->id)
                        ->latest()
                        ->get();

        $title="List of All Consultations of the Doctor: ";
        return view('backend.doctors.consultation.index', compact('consultations', 'title'));
    }

    public function done(){
        $consultations = Consultation::where('doctor_id', Auth::user()->id)
            ->where('status', 'LIKE', 'Done')
            ->latest()
            ->get();
        $title="List of All Consultations Done By the Doctor: ";
        return view('backend.doctors.consultation.index', compact('consultations', 'title'));
    }

    public function waiting(){

        $consultations = Consultation::where('doctor_id', Auth::user()->id)
            ->where('status', 'LIKE', 'Not Done')
            ->latest()
            ->get();
        $title="List of All Pending Consultations of the Doctor: ";
        return view('backend.doctors.consultation.index', compact('consultations', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Consultation $consultation
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Consultation $consultation)
    {
        //
        return view('backend.doctors.consultation.show', compact('consultation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctors = Doctor::latest()->get();
        $consultation = Consultation::where('id', $id)
            ->with(['patient', 'observations', 'prescribedExams', 'prescribedDrugs'])
            ->first();

        $array = [];
        foreach ($consultation['observations'] as $key=>$observation){
            $array[$key] = $observation->observation;
        }
        $observations = json_encode($array);

        $array = [];
        foreach ($consultation['prescribedExams'] as $key=>$exam){
            $array[$key] = $exam->name;
        }
        $exams = json_encode($array);

        $array = [];
        foreach ($consultation['prescribedDrugs'] as $key=>$drug){
            $array[$key] = $drug->name;
        }
        $drugs = json_encode($array);

        return view('backend.consultants.medical-book.edit', compact('consultation','observations', 'doctors', 'exams', 'drugs'));
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
        //
        $consultation = Consultation::where('id',$id)->firstOrFail();

        $consultation->update(array_merge($request->only('name'), [
            'patient_id'=>$request->input('patient'),
            'done_by'=> Auth::user()->name,
            'role_prescriber'=>'Consultant',
            'doctor_id'=>isset($request->doctor) ? $request->doctor : 1,
        ]));

        //save  drugs of the consultation
        if ($request->has('drugs')) {
            foreach($consultation->prescribedDrugs as $drug){
                $drug->delete();
            }
            $drugs = json_decode($request->input('drugs'));
            foreach ($drugs as $drug) {
                PrescribedDrug::create([
                    'name'=>$drug,
                    'consultation_id'=>$consultation->id
                ]);
            }
        }

        //save exams of the consultation
        if ($request->has('exams')) {
            foreach($consultation->prescribedExams as $exam){
                $exam->delete();
            }
            $exams = json_decode($request->input('exams'));
            foreach ($exams as $exam) {
                PrescribedExam::create([
                    'name'=>$exam,
                    'consultation_id'=>$consultation->id,
                ]);
            }
        }

        //save of the Observation
        if ($request->has('observations')) {
            $observations = json_decode($request->input('observations'));
            foreach($consultation->observations as $observation){
                $observation->delete();
            }
            foreach ($observations as $observation) {
                Observation::create([
                    'observation'=>$observation,
                    'consultation_id'=>$consultation->id,
                ]);
            }
        }

        return redirect()->route('doctors.consultation.index')
            ->with('message', 'Consultation Update successfully')
            ->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
