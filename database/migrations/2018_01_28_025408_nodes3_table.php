<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nodes3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('node3', function (Blueprint $table) {
            $table->increments('node3_id');
            $table->string('node3_sourcenode');
            $table->string('node3_destinationnode');
           $table->integer('node3_reorderperiod');
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
       Schema::drop("node3");
    }
}
