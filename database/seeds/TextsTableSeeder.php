<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TextsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('texts')->insert([
            'group_id' => 1,
            'field_id' => 1,
            'node_id' => 1,
            'weight' => 0,
            'value' => 'This is the homepage meta title',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('texts')->insert([
            'group_id' => 1,
            'field_id' => 2,
            'node_id' => 1,
            'weight' => 0,
            'value' => 'This is the homepage meta description.',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
    }
}
