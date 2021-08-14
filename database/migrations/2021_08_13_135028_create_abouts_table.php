<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('titreAbout', 100);
            $table->string('para', 300);
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->string('titre', 100);
            $table->string('paragra', 300);
            $table->string('img',100);
            $table->string('description', 200);
            $table->string('birthday');
            $table->string('website', 100);
            $table->string('phone');
            $table->string('city', 100);
            $table->string('age');
            $table->string('degree', 80);
            $table->string('email', 100);
            $table->string('freelance', 100);
            $table->longText('paragraphe');
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
        Schema::dropIfExists('abouts');
    }
}
