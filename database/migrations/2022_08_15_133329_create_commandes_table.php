<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('adresse');
            $table->date('date_commande');
            $table->string('delais');
            $table->string('type_livraison');
            $table->string('reference')->unique();
            $table->double('montant');
            $table->double('prix_livraison');
            $table->integer('nombre_article');
            $table->double('montant_total');
            $table->foreignId("centre_impression_id")
            ->constrained()->onDelete("restrict");
            $table->foreignId("user_id")
            ->constrained()->onDelete("restrict")->nullable();
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
        Schema::dropIfExists('commandes');
    }
}
