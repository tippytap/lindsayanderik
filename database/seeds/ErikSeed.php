<?php

use Illuminate\Database\Seeder;

class ErikSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Erik Miller',
            'email' => 'erikmiller6@gmail.com',
            'password' => bcrypt('1140475Ae110')
        ]);
    }
}
