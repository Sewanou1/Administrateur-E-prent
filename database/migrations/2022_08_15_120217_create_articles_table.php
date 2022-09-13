<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->double('prix');
            $table->string('support_impression');
            $table->foreignId("type_impression_id")
            ->constrained()->onDelete("restrict");
            $table->foreignId("format_id")
            ->constrained()->onDelete("restrict");
            $table->foreignId("galerie_id")
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
        Schema::dropIfExists('articles');
    }
}
