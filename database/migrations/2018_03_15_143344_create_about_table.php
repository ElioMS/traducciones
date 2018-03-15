<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagen');
            $table->timestamps();
        });

        Schema::create('about_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->text('titulo');
            $table->text('descripcion');
            $table->string('locale')->index();
            $table->integer('about_id')->unsigned();
            $table->unique(['about_id','locale']);
            $table->foreign('about_id')->references('id')->on('about')->onDelete('cascade');
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
        Schema::dropIfExists('about');
    }
}
