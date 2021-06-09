<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'id' => 1,
                'shop_name' => '高級食パン屋',
                'area_id' => 1
            ],
            [
                'id' => 2,
                'shop_name' => '高級クロワッサン屋',
                'area_id' => 2
            ],
            [
                'id' => 3,
                'shop_name' => '高級メロンパン屋',
                'area_id' => 3
            ],
            [
                'id' => 4,
                'shop_name' => '高級コッペパン',
                'area_id' => 4
            ],
            [
                'id' => 5,
                'shop_name' => '高級カレーパン',
                'area_id' => 5
            ],
            [
                'id' => 6,
                'shop_name' => '高級カレーパン',
                'area_id' => 1
            ],
            [
                'id' => 7,
                'shop_name' => '高級カレーパン',
                'area_id' => 3
            ],
        ]);
    }
}
