<?php

namespace Database\Seeders;

use App\Models\Division;
use Database\Factories\TeamFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = Division::all();

        foreach ($divisions as $division) {
            $division->teams()->createMany(TeamFactory::times(10)->make()->toArray());
        }
    }
}
