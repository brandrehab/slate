<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fields')->insert([
            'name' => 'Meta Title',
            'description' => 'Title of the node.',
            'group_id' => 1,
            'fieldtype_id' => 1,
            'minimum' => 1,
            'maximum' => 1,
            'weight' => 0,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('fields')->insert([
            'name' => 'Meta Description',
            'description' => 'Description of the node.',
            'group_id' => 1,
            'fieldtype_id' => 1,
            'minimum' => 1,
            'maximum' => 1,
            'weight' => 1,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
    }
}
