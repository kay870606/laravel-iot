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
        $this->call(CategoriesTableSeeder::class);
        $this->call(SubcategoriesTableSeeder::class);
        $this->call(BeaconsTableSeeder::class);
        $this->call(CategoryBeaconsTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(CategoryActivitiesTableSeeder::class);
        Schema::enableForeignKeyConstraints();
    }
}
