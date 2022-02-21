<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguageLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_link', function (Blueprint $table) {
            $table->id();
            $table->string('name', 4);
            $table->string('link');
            $table->unsignedBigInteger('language_link_id');
            $table->foreign('language_link_id')->references('id')->on('language_links')->onDelete('cascade');
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
        Schema::dropIfExists('language_link');
    }
}
