<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Analizator;
use App\Models\Branch;
use App\Models\Doctor;
use App\Models\Organisation;
use App\Models\Research;
use App\Models\ResearchOrder;
use App\Models\Test;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Branch::factory(100)->create();
        Doctor::factory(100)->create();
        Organisation::factory(100)->create();
        Research::factory(100)->create();
        ResearchOrder::factory(100)->create();
        Test::factory(100)->create();
        Analizator::factory(100)->create();
    }
}
