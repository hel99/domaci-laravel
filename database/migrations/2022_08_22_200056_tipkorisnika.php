<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tipkorisnika extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('osobas', function (Blueprint $table) {
            $table->after('prezime', function ($table) {
                $table->string('tip');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('osobas', function (Blueprint $table) {
            $table->dropColumn('tip');
        });
    }
}
