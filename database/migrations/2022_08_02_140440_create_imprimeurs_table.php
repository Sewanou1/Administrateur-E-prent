<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImprimeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imprimeurs', function (Blueprint $table) {
            $table->id();
            $table->string('raison_sociale');
            $table->string('email')->unique();
            $table->integer('telephone')->unique();
            $table->string('adresse');
            $table->string('password');
            $table->foreignId("administrateur_id")
            ->constrained()->onDelete("restrict");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imprimeurs');
    }
}
