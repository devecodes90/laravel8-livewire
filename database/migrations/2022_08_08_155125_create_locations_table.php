<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->dateTime("dateDebut");
            $table->dateTime("dateFin");
            $table->foreignId("client_id");
            $table->foreignId("user_id");
            $table->foreignId("status_location_id");

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
        Schema::table("locations", function (Blueprint $table){
            $table->dropForeign(["client_id", "user_id", "status_location_id"]);
        });
        Schema::dropIfExists('locations');
    }
}