<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Schema::disableForeignKeyConstraints();
        $this->call(CommandsTableSeeder::class);
        $this->call(LightsTableSeeder::class);
        $this->call(OperationsTableSeeder::class);
        $this->call(ManagersTableSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}
