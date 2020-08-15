<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerLikesDislikes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_likes_dislikes', function (Blueprint $table) {
            $table->integer('point');
            
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('answer_id');

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('answer_id')->references('id')->on('answers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_likes_dislikes');

        $table->dropForeign(['user_id']);
        $table->dropForeign(['answer_id']);
        $table->dropColumn(['user_id']);
        $table->dropColumn(['answer_id']);
    }
}
