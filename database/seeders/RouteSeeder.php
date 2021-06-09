<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert([
            [
                'id' => 1,
                'name' => '山手線',
                'sort_no' => 1
            ],
            [
                'id' => 2,
                'name' => '京急東北線',
                'sort_no' => 2
            ],
            [
                'id' => 3,
                'name' => '東武東上線',
                'sort_no' => 3
            ],
            [
                'id' => 4,
                'name' => '伊豆急下田',
                'sort_no' => 4
            ],
            [
                'id' => 5,
                'name' => '熱海線',
                'sort_no' => 5
            ],
        ]);
    }
}
