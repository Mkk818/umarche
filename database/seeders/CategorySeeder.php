<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'レディースファッション',
                'sort_order' => '1',
            ],
            [
                'name' => 'メンズファッション',
                'sort_order' => '2',
            ],
            [
                'name' => 'キッズ・ベビー
                ファッション',
                'sort_order' => '3',
            ],

        ]);
        DB::table('secondary_categories')->insert([
            // レディースファッション
            [
                'name' => 'トップス',
                'sort_order' => '1',
                'primary_category_id' => '1',
            ],
            [
                'name' => 'ボトムス',
                'sort_order' => '2',
                'primary_category_id' => '1',
            ],
            [
                'name' => 'ワンピース',
                'sort_order' => '3',
                'primary_category_id' => '1',
            ],
            // メンズファッション
            [
                'name' => 'トップス',
                'sort_order' => '1',
                'primary_category_id' => '2',
            ],
            [
                'name' => 'ボトムス',
                'sort_order' => '2',
                'primary_category_id' => '2',
            ],
            [
                'name' => 'アウター',
                'sort_order' => '3',
                'primary_category_id' => '2',
            ],
            // キッズ・ベビーファッション
            [
                'name' => 'キッズファッション',
                'sort_order' => '1',
                'primary_category_id' => '3',
            ],
            [
                'name' => 'ベビーファッション',
                'sort_order' => '2',
                'primary_category_id' => '3',
            ],
        ]);
    }
}
