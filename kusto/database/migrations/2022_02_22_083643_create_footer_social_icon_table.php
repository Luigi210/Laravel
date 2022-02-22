<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterSocialIconTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_social_icon', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('link');
            $table->unsignedBigInteger('footer_id');
            $table->foreign('footer_id')->references('id')->on('footer')->onDelete('cascade');
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
        Schema::dropIfExists('footer_social_icon');
    }
}
