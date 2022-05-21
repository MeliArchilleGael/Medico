<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Department::create([
            'name' => 'Cardiology',
            'description' => 'department of Cardiology'
        ]);
        Department::create([
            'name' => 'Neurology',
            'description' => 'department of Neurology'
        ]);
        Department::create([
            'name' => 'Hepatology',
            'description' => 'department of Hepatology'
        ]);
        Department::create([
            'name' => 'Pediatrics',
            'description' => 'department of Pediatrics'
        ]);
        Department::create([
            'name' => 'Generalist',
            'description' => 'department of Generalist'
        ]);
    }
}
