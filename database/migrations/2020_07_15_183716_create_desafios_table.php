<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesafiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desafios', function (Blueprint $table) {
            $table->id();
            $table->text('body_text');
            $table->unsignedBigInteger('created_by');
            $table->string('main_lang');
            $table->string('sec_lang')->nullable()->default("");
            $table->integer('recomended_lvl')->default(1);
            $table->integer('exp_points')->default(0);
            $table->boolean('is_front')->default(false);
            $table->boolean('is_back')->default(false); 
            $table->boolean('is_data')->default(false);
            $table->integer('tried_by')->default(0);
            $table->integer('solved_by')->default(0);
            $table->integer('likes')->default(0);
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
        Schema::dropIfExists('desafios');
    }
}
