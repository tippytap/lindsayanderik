<?php

use Illuminate\Database\Seeder;

class WeddingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weddings')->insert([
            'name' => str_random(10),
            'location' => str_random(10),
            'owner' => 1
        ]);
    }
}
