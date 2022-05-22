<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use App\Models\PrescribedExam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    //

    public function edit($exam){
        $exam = PrescribedExam::where('id', $exam)->firstOrFail();
        return view('backend.doctors.exam.edit', compact('exam'));
    }

    public function update(Request $request, PrescribedExam $exam)
    {
        $exam->update([
            'result'=>$request->result,
            'observation'=>$request->observation,
            'status'=>'Done',
        ]);

        //update the status of the consultation
        $consultation = $exam->consultation;
        $consultation->status = 'Done';
        $consultation->save();

        return redirect()->route('doctors.consultation.index');
    }
}
