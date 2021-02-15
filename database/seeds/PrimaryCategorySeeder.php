<?php

use Illuminate\Database\Seeder;
use App\Models\PrimaryCategory;

class PrimaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PrimaryCategory::class)->create([
            'id'      => 1,
            'name'    => '生鮮食品',
            'sort_no' => 1,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 2,
            'name'    => '飲料',
            'sort_no' => 2,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 3,
            'name'    => 'お土産',
            'sort_no' => 3,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 4,
            'name'    => 'その他',
            'sort_no' => 4,
        ]);
    }
}
