<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nodes1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('node1', function (Blueprint $table) {
            $table->increments('node1_id');
            $table->string('node1_sourcenode');
            $table->string('node1_destinationnode');
           $table->integer('node1_reorderperiod');
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
        Schema::drop("node1");
    }
}
