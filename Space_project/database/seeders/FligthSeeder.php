<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FligthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->insert([
            [
                'depart_date' => '2022/02/12',
                'depart_time' => '12:38',
                'arrival_date' => '2022/03/01',
                'arrival_time' => '14:52',
                'itinerary_id' => 1,
                'location_id' => 1,
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'depart_date' => '2022/02/21',
                'depart_time' => '19:33',
                'arrival_date' => '2022/03/24',
                'arrival_time' => '11:23',
                'itinerary_id' => 2,
                'location_id' => 3,
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'depart_date' => '2022/04/18',
                'depart_time' => '09:41',
                'arrival_date' => '2022/08/11',
                'arrival_time' => '17:04',
                'itinerary_id' => 4,
                'location_id' => 6,
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'depart_date' => '2022/03/17',
                'depart_time' => '05:27',
                'arrival_date' => '2022/04/26',
                'arrival_time' => '19:34',
                'itinerary_id' => 3,
                'location_id' => 5,
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
        ]);
    }
}
