<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturess', function (Blueprint $table) {
            $table->id();
            $table->string('prix');
            $table->longText('detail');
            $table->string('statut');
            $table->foreignId("panier_id")
            ->constrained()->onDelete("restrict");
            $table->foreignId("user_id")
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
        Schema::dropIfExists('facturess');
    }
}
