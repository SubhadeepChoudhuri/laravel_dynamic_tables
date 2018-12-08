<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nodes4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
         Schema::create('node4', function (Blueprint $table) {
            $table->increments('node4_id');
            $table->string('node4_sourcenode');
            $table->string('node4_destinationnode');
           $table->integer('node4_reorderperiod');
           $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("node4");
    }
}
