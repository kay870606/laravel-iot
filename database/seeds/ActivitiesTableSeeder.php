<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => '拜誠意，也拜星意', 'image_path' => 'activities/2019-12-02/1.png'],
            ['name' => '史上最狂風暴', 'image_path' => 'activities/2019-12-02/2.png'],
            ['name' => '可愛貓貓', 'image_path' => 'activities/2019-12-02/3.png'],
            ['name' => '夏日好茶暢快送', 'image_path' => 'activities/2019-12-02/4.png'],
        ];

        DB::table('activities')->truncate();

        foreach ($items as $item) {
            \App\Activity::create($item);
        }
    }
}
