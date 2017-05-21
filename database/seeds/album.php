<?php

use Illuminate\Database\Seeder;

class album extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              DB::table('album')->insert([
            'imgs' => str_random(20),
            'commentid' => str_random(20),
            'title' =>str_random(20),
        ]);
    }
}
