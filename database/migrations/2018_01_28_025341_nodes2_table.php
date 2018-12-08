<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nodes2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('node2', function (Blueprint $table) {
            $table->increments('node2_id');
            $table->string('node2_sourcenode');
            $table->string('node2_destinationnode');
           $table->integer('node2_reorderperiod');
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
         Schema::drop("node2");
    }
}
