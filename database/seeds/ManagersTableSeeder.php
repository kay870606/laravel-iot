<?php

use Illuminate\Database\Seeder;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 'Test', 'email' => 'test@gmail.com', 'password' => Hash::make('testtest')],
        ];

        DB::table('managers')->truncate();

        foreach ($items as $item) {
            \App\Manager::create($item);
        }
    }
}
