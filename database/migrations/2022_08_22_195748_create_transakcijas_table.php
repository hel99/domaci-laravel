<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransakcijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transakcijas', function (Blueprint $table) {
            $table->id();
            $table->string('tip');
            $table->double('iznos');
            $table->string('datum');
            $table->string('status');
            $table->foreignId('racun_id')->constrained('racuns');
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
        Schema::dropIfExists('transakcijas');
    }
}
