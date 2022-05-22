<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Dev user',
            'password' => Hash::make('password'),
            'email' => 'user@medico.com',
        ]);

        Patient::create([
            'name' => 'Dev patient',
            'address' => 'Douala',
            'date_of_birth' => '17/05/2000',
            'telephone' => '+237 658 951 548',
            'password' => Hash::make('password'),
            'email' => 'patient@medico.com',
            'department_id'=>'2',
            'matriculate'=>'22MED2313',
        ]);

        Doctor::create([
            'name' => 'Dev doctor',
            'address' => 'Bamenda',
            'date_of_birth'=>'20/01/1997',
            'telephone' => '+237 658 951 548',
            'password' => Hash::make('password'),
            'email' => 'doctor2@medico.com',
            'speciality'=>'1',
        ]);

        Doctor::create([
            'name' => 'Dev Doctor 2',
            'address' => 'Bamenda',
            'date_of_birth'=>'20/01/1997',
            'telephone' => '+237 698 951 548',
            'password' => Hash::make('password'),
            'email' => 'doctor@medico.com',
            'speciality'=>'2',
        ]);

        $this->call(ConsultationSeed::class);
        $this->call(DepartmentSeed::class);
    }
}
