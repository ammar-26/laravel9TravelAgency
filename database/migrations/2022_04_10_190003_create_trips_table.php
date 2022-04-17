<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            //$table->foreign('parent_id')->nullable(); 
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('duration')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('trips');
    }
};
