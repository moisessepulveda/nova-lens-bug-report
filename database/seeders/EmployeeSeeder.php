<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::factory(30)
            ->has(Payment::factory()->count(15))
            ->create();

    }
}
