<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('comment_text');
            $table->unsignedBigInteger('user_id');
            $table->integer('likes')->nullable()->default(0);
            $table->boolean('active')->nullable()->default(0);
            $table->unsignedBigInteger('parent_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('parent_id')->references('id')->on('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('child_comments');
    }
}
