<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Workshop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('workshop', function (Blueprint $table) {
                $table->increments('id');
                $table->string('imgs');
                $table->string('introduction');
                $table ->string('title');
                $table ->string('tech_field');
                $table ->integer('status');
                $table->timestamp('created_at')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
