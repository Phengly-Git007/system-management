<?php

namespace Database\Seeders;

use App\Models\Cambodia\Province;
use Database\Seeders\Data\ProvinceData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(ProvinceData::$data as $province){
            Province::insert($province);
        }
    }
}
