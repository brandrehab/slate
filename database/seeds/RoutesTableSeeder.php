<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert([
            'name' => 'home.get',
            'path' => '/',
            'verb' => 'get',
            'controller' => 'HomeController',
            'action' => 'show',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('routes')->insert([
            'name' => 'section.get',
            'path' => '/{slug:[A-Za-z0-9_-]+}',
            'verb' => 'get',
            'controller' => 'SectionController',
            'action' => 'show',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('routes')->insert([
            'name' => 'about.get',
            'path' => '/about-us/{slug:[A-Za-z0-9_-]+}',
            'verb' => 'get',
            'controller' => 'AboutController',
            'action' => 'show',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
    }
}
