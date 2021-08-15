<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_details', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->longText('home');
            $table->string('details');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('titre2');
            $table->string('category');
            $table->string('client');
            $table->string('projetDate');
            $table->string('projetUrl');
            $table->string('titre3');
            $table->longText('para');
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
        Schema::dropIfExists('portfolio_details');
    }
}
