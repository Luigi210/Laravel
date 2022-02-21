<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_link', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('link');
            $table->string('description');
            $table->unsignedBigInteger('contact_link_id');
            $table->foreign('contact_link_id')->references('id')->on('contact_links')->onDelete('cascade');
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
        Schema::dropIfExists('contact_link');
    }
}
