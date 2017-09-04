<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('News_tbl', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('content');
                $table->string('author');
                $table->string('comments');
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
