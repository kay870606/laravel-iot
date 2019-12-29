<?php

use Illuminate\Database\Seeder;

class CommandsTableSeeder extends Seeder
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
            ['operation' => 1],
        ];

        DB::table('commands')->truncate();

        foreach ($items as $item) {
            \App\Command::create($item);
        }
    }
}
