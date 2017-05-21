<?php

use Illuminate\Database\Seeder;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            
            'imgs' => str_random(20),
            'introduction' => str_random(20),
            'title' =>str_random(20),
            'tech_field' => str_random(20),
            'status' => 1,
        ]);
       
    }
}
