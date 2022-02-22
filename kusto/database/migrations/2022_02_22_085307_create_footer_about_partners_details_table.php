<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterAboutPartnersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_about_partners_details', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
            $table->unsignedBigInteger('about_partners_id');
            $table->foreign('about_partners_id')->references('id')->on('footer_about_partners')->onDelete('cascade');
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
        Schema::dropIfExists('footer_about_partners_details');
    }
}
