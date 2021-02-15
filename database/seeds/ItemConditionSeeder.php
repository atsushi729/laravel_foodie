<?php

use Illuminate\Database\Seeder;
use App\Models\ItemCondition;

class ItemConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ItemCondition::class)->create([
            'id'      => 1,
            'name'    => '新鮮（賞味期限1年以上）',
            'sort_no' => 1,
        ]);
        factory(ItemCondition::class)->create([
            'id'      => 2,
            'name'    => 'やや新鮮（賞味期限８ヶ月程度）',
            'sort_no' => 2,
        ]);
        factory(ItemCondition::class)->create([
            'id'      => 3,
            'name'    => '目立った傷や汚れなし',
            'sort_no' => 3,
        ]);
        factory(ItemCondition::class)->create([
            'id'      => 4,
            'name'    => 'やや傷や汚れあり',
            'sort_no' => 4,
        ]);
        factory(ItemCondition::class)->create([
            'id'      => 5,
            'name'    => '傷や汚れあり',
            'sort_no' => 5,
        ]);
        factory(ItemCondition::class)->create([
            'id'      => 6,
            'name'    => '賞味期限間近（お早めに）',
            'sort_no' => 6,
        ]);
    }
}
