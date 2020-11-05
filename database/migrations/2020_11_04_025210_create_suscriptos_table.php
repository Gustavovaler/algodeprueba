<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscriptosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscriptos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('pagado')->default(0);
            $table->string('operación')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('cupon_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('cupon_id')->references('id')->on('cupons');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suscriptos');
    }
}
