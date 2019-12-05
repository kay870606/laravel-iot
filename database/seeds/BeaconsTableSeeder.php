<?php

use Illuminate\Database\Seeder;

class BeaconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beacons')->truncate();

        for ($i = 0; $i <= 15; $i++)
            for ($j = 0; $j <= 2; $j++) {
                $id = sprintf("%02d", $i) . sprintf("%02d", $j);
                \App\Beacon::create(['name' => $id, 'mac' => '']);
            }

    }
}
