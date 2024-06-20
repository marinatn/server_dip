<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Analizator;
use App\Models\Biomaterial;
use App\Models\Container;
use App\Models\Patient;
use App\Models\Point;
use App\Models\Branch;
use App\Models\Doctor;
use App\Models\Equipment;
use App\Models\Interaction;
use App\Models\Organisation;
use App\Models\Reference;
use App\Models\Research;
use App\Models\ResearchOrder;
use App\Models\Risk;
use App\Models\Sample;
use App\Models\Test;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\ReferenceFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Doctor::factory(25)->create();
        Patient::factory(100)->create();
        ResearchOrder::factory(100)->create();

    }
}
