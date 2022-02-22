<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterContactDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_contact_details', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('details', 255);
            $table->unsignedBigInteger('contact_id');
            $table->foreign('contact_id')->references('id')->on('footer_contact')->onDelete('cascade');
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
        Schema::dropIfExists('footer_contact_details');
    }
}
