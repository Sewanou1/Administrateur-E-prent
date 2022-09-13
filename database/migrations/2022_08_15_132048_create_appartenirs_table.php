<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartenirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartenirs', function (Blueprint $table) {
            $table->id();
            $table->foreignId("role_id")
            ->constrained()->onDelete("restrict");
            $table->foreignId("user_id")
            ->constrained()->onDelete("restrict");
            $table->foreignId("imprimeur_id")
            ->constrained()->onDelete("restrict");
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
        Schema::dropIfExists('appartenirs');
    }
}
