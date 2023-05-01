<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArgentsTable extends Migration
{
    /**
     * Exécute la migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('argents', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->float('montant');
            $table->timestamps();
        });
    }

    /**
     * Revert la migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('argents');
    }
}
