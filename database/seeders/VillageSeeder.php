<?php

namespace Database\Seeders;

use App\Models\Cambodia\Village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\Data\VillageData;

class VillageSeeder extends Seeder
{

    public function run()
    {
       $vill_chunk = array_chunk(VillageData::$data, 2500);
       foreach($vill_chunk as $villages){
        Village::insert($villages);
       }
    }
}
