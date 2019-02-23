<?php

use Illuminate\Database\Seeder;

class WeddingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weddings')->insert([
            'name' => 'Lindsay and Erik',
            'location' => 'Sundara, Boones Mill, VA',
            'owner' => 1
        ]);
    }
}
