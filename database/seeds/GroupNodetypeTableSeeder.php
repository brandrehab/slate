<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupNodetypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_nodetype')->insert([
            'group_id' => 1,
            'nodetype_id' => 1,
        ]);
    }
}
