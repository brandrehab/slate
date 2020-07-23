<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('RoutesTableSeeder');
        $this->call('NodetypesTableSeeder');
        $this->call('NodesTableSeeder');
        $this->call('MenusTableSeeder');
        $this->call('FieldtypesTableSeeder');
        $this->call('GroupsTableSeeder');
        $this->call('FieldsTableSeeder');
        $this->call('TextsTableSeeder');
        $this->call('GroupNodetypeTableSeeder');
    }
}
