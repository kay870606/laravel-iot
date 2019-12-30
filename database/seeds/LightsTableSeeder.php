<?php

use Illuminate\Database\Seeder;

class LightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['operation' => 0],
        ];

        DB::table('lights')->truncate();

        foreach ($items as $item) {
            \App\Light::create($item);
        }
    }
}
