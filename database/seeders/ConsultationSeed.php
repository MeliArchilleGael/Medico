<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\Observation;
use App\Models\PrescribedDrug;
use App\Models\PrescribedExam;
use Illuminate\Database\Seeder;

class ConsultationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Consultation::create([
            'done_by'=>'2',
            'role_prescriber'=>'Consultant',
            'name'=>'Consultation des yeux',
            'status' => 'Done',
            'patient_id' => '1',
            'doctor_id' => '1',
            'date_consultation'=>now(),
        ]);
        //observation de la consultation
        Observation::create([
            'observation'=>'Le patient a été tester positif a la neopy',
            'consultation_id'=>'1',
        ]);
        Observation::create([
            'observation'=>'Le patient a été tester negatif au douleur',
            'consultation_id'=>'1',
        ]);

        //prescribed drug of the consultation
        PrescribedDrug::create([
           'name'=>'Paracetamol',
           'observation'=>'1 matin 1 midi 1 soir',
            'consultation_id'=>'1'
        ]);
        PrescribedDrug::create([
            'name'=>'Effelragan',
            'observation'=>'1 matin 1 soir',
            'consultation_id'=>'1'
        ]);



        Consultation::create([
            'done_by'=>'1',
            'role_prescriber'=>'Consultant',
            'name'=>'Scan du cerveaux',
            'status' => 'Not Done',
            'patient_id' => '1',
            'doctor_id' => '1',
            'date_consultation'=>now(),
        ]);

        //prescribed exams the the consultations
        PrescribedExam::create([
            'name'=>'Scan du cerveaux',
            'consultation_id'=>'2',
        ]);

    }
}
