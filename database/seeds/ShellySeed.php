<?php

use Illuminate\Database\Seeder;

class ShellySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Shelly Key',
            'email' => 'skey@vt.edu',
            'password' => bcrypt('millieTh3Cat!')
        ]);
    }
}
