<?php

use Illuminate\Database\Seeder;

class NerdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i < 100; $i++){
        	DB::table('nerds')->insert([
            'f_name' => str_random(10),
            'l_name' => str_random(10),
            'e_id' => rand(),
        ]);
        }
    }
}
