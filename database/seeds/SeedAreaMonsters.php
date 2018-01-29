<?php

use Illuminate\Database\Seeder;

class SeedAreaMonsters extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area_monsters')->truncate(); // maak leeg

        // Area 15/1
        DB::table('area_monsters')->insert(['area_id' => 1, 'monster_id' => 1]);
        DB::table('area_monsters')->insert(['area_id' => 1, 'monster_id' => 2]);
        DB::table('area_monsters')->insert(['area_id' => 1, 'monster_id' => 3]);
        DB::table('area_monsters')->insert(['area_id' => 1, 'monster_id' => 4]);
        DB::table('area_monsters')->insert(['area_id' => 1, 'monster_id' => 5]);

        // Area 15/2
        DB::table('area_monsters')->insert(['area_id' => 2, 'monster_id' => 6]);
        DB::table('area_monsters')->insert(['area_id' => 2, 'monster_id' => 7]);
        DB::table('area_monsters')->insert(['area_id' => 2, 'monster_id' => 8]);
        DB::table('area_monsters')->insert(['area_id' => 2, 'monster_id' => 9]);
        DB::table('area_monsters')->insert(['area_id' => 2, 'monster_id' => 10]);
        DB::table('area_monsters')->insert(['area_id' => 2, 'monster_id' => 11]);
        DB::table('area_monsters')->insert(['area_id' => 2, 'monster_id' => 12]);
    }
}
