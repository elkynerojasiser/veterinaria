<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->enum('especie',['canino','felino','ave','reptil','bovino','equino']);
            $table->double('peso')->default(0.0);
            $table->unsignedBigInteger('color_id')->index();
            $table->integer('edad');
            $table->bigInteger('persona_id')->unsigned()->index();
            $table->timestamps();

            //llave foranea

            $table->foreign('persona_id')->references('id')->on('personas')
            ->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('color_id')->references('id')->on('colores')
            ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
}
