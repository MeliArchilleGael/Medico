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
            'name' => 'Nurse',
            'password' => Hash::make('password'),
            'email' => 'nurse@follow.com',
        ]);

        Patient::create([
            'name' => 'patient',
            'address' => 'Douala',
            'date_of_birth' => '17/05/2000',
            'telephone' => '+237 658 951 548',
            'password' => Hash::make('password'),
            'email' => 'patient@follow.com',
            'department_id'=>'2',
            'matriculate'=>'22FOW2313',
        ]);

        Doctor::create([
            'name' => 'Cardiologue Doctor',
            'address' => 'Bamenda',
            'date_of_birth'=>'20/01/1997',
            'telephone' => '+237 658 951 548',
            'password' => Hash::make('password'),
            'email' => 'cardiology@follow.com',
            'speciality'=>'1',
            'matriculate'=>'22FOW7841',
        ]);

        Doctor::create([
            'name' => 'Neurologue Doctor',
            'address' => 'Bamenda',
            'date_of_birth'=>'20/01/1997',
            'telephone' => '+237 698 951 548',
            'password' => Hash::make('password'),
            'email' => 'neurologue@follow.com',
            'speciality'=>'2',
            'matriculate'=>'22FOW2343',
        ]);

        $this->call(ConsultationSeed::class);
        $this->call(DepartmentSeed::class);
    }
}
