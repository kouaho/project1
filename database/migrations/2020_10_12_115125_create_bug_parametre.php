<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBugParametre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bug_parametre', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bug_id');
            $table->foreign('bug_id')
                  ->references('id')->on('bugs')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->unsignedBigInteger('parametre_id');
            $table->foreign('parametre_id')
                  ->references('id')->on('parametres')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('bug_parametre');
    }
}
