<?php

namespace Database\Seeders;

use App\Models\Cambodia\District;
use Database\Seeders\Data\DistrictData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dist_chunk = array_chunk(DistrictData::$data, 50);
        foreach($dist_chunk  as $districts){
            District::insert($districts);
        }
    }
}
