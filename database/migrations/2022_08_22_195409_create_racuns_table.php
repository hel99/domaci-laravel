<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racuns', function (Blueprint $table) {
            $table->id();
            $table->string('broj_racuna');
            $table->string('tip');
            $table->double('stanje');
            $table->foreignId('osoba_id')->constrained('osobas');
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
        Schema::dropIfExists('racuns');
    }
}
