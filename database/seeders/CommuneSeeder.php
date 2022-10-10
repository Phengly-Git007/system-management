<?php

namespace Database\Seeders;

use App\Models\Cambodia\Commune;
use Database\Seeders\data\CommuneData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comm_chunk = array_chunk(CommuneData::$data, 300);
        foreach($comm_chunk as $communes ){
            Commune::insert($communes);
        }
    }

}
