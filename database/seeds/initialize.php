<?php

use Illuminate\Database\Seeder;

class initialize extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('books') ->insert([
		'title' ->str_random(50),
		'image' ->str_random(50),
		'tech_field' ->str_random(50),
		'status' ->str_random(50)

    		]);
    }
}
