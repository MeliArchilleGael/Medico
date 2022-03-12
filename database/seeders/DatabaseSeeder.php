<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        DB::table('users')->insert([
            'name' => 'Dev user',
            'password' => Hash::make('password'),
            'email' => 'user@medico.com',
        ]);

        DB::table('patients')->insert([
            'name' => 'Dev patient',
            'address' => 'Douala',
            'date_of_birth' => '17/05/2000',
            'telephone' => '+237 658 951 548',
            'password' => Hash::make('password'),
            'email' => 'patient@medico.com',
        ]);

        DB::table('doctors')->insert([
            'name' => 'Dev doctor',
            'address' => 'Bamenda',
            'date_of_birth'=>'20/01/1997',
            'telephone' => '+237 658 951 548',
            'password' => Hash::make('password'),
            'email' => 'doctor@medico.com',
        ]);
    }
}
