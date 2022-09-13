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
            $table->double('prix');
            $table->double('montant');
            $table->string('type_impression');
            $table->string('format');
            $table->string('info_specifique');
            $table->string('support_impression');
            $table->foreignId("article_commande_id")
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
