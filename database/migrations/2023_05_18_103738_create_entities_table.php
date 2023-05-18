<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreateEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // create the 'entities' table
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text(('description'));
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Drop the 'entites' table if its exsits
        Schema::dropIfExists('entities');
    }
};
