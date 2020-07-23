<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nodes')->insert([
            'heading' => 'Welcome',
            'slug' => 'welcome',
            'nodetype_id' => 1,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('nodes')->insert([
            'heading' => 'About Us',
            'slug' => 'about-us',
            'nodetype_id' => 2,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('nodes')->insert([
            'heading' => 'Services',
            'slug' => 'services',
            'nodetype_id' => 2,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('nodes')->insert([
            'heading' => 'Contact Us',
            'slug' => 'contact-us',
            'nodetype_id' => 2,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('nodes')->insert([
            'heading' => 'Our History',
            'slug' => 'our-history',
            'nodetype_id' => 3,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
    }
}
