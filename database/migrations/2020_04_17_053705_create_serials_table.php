<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('duration');
            $table->longtext('description');
            $table->string('genre');
            $table->string('country');
            $table->string('rating');
            $table->string('year');
            $table->string('likes');
            $table->string('dislikes');
            $table->string('thriller');
            $table->string('seasons');
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
        Schema::dropIfExists('serials');
    }
}
