<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDureeTarificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duree_tarifications', function (Blueprint $table) {
            $table->id();
            $table->double('price');
            $table->foreignId("duree_location_id");
            $table->foreignId("article_id");
            $table->timestamps();
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
        Schema::dropIfExists('duree_tarifications');
    }
}
