<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facts', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->longText('titrePara');
            $table->string('happy', 100);
            $table->longText('paraHappy');
            $table->string('project', 100);
            $table->longText('paraProjet');
            $table->string('support', 100);
            $table->longText('paraSupp');
            $table->string('work', 100);
            $table->longText('paraWork');
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
        Schema::dropIfExists('facts');
    }
}
