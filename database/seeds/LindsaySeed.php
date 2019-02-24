<?php

use Illuminate\Database\Seeder;

class LindsaySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Lindsay Key',
            'email' => 'lindskey@gmail.com',
            'password' => bcrypt('1linds4vt')
        ]);
    }
}
