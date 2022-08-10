<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->double('montantPaiement');
            $table->dateTime('datePaiement');
            $table->foreignId("user_id");
            $table->foreignId("location_id");
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("tarifications", function (Blueprint $table){
            $table->dropForeign(["duree_location_id", "article_id"]);
        });
        Schema::dropIfExists('paiements');
    }
}