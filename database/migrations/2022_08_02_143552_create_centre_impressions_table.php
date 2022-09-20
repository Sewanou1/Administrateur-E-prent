<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentreImpressionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centre_impressions', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('telephone');
            $table->string('adresse');
            $table->double('longitude');
            $table->double('lagitude');
            $table->string('ifu');
            $table->string('photo')->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("linkedIn")->nullable();
            $table->string("twitter")->nullable();
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
        Schema::dropIfExists('centre_impressions');
    }
}
