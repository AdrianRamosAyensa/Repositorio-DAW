<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Study;
use DB;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Study::create([
            'code' => 'IFC303',
            'name' => 'Desarrollo de aplicaciones web', 
            'abreviation' => 'DAW'
        ]);
    }
}
