<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_links', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('link');
            $table->string('description');
            $table->unsignedBigInteger('table_header_id');
            $table->foreign('table_header_id')->references('id')->on('table_header');
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
        Schema::dropIfExists('contact_links');
    }
}
