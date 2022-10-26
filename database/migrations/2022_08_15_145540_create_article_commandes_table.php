<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_commandes', function (Blueprint $table) {
            $table->id();
            $table->integer('quantite');
            $table->double('prix')->nullable();
            $table->double('montant')->nullable();
            $table->string('type_impression')->nullable();
            $table->string('format')->nullable();
            $table->string('document');
            $table->string('commentaire')->nullable();
            $table->string('support_impression')->nullable();
            $table->foreignId("commande_id")
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
        Schema::dropIfExists('article_commandes');
    }
}
