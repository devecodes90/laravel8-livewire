<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDureeArticleLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duree_article_locations', function (Blueprint $table) {
            $table->foreignId("article_id")->constrained();
            $table->foreignId("location_id")->constrained();
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
        Schema::table("article_locations", function (Blueprint $table){
            $table->dropForeign(["article_id", "location_id"]);
        });

        Schema::dropIfExists('duree_article_locations');
    }
}
