<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionLikesDislikes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_likes_dislikes', function (Blueprint $table) {
            $table->integer('point');
            
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('question_id');

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_likes_dislikes');

        $table->dropForeign(['user_id']);
        $table->dropForeign(['question_id']);
        $table->dropColumn(['user_id']);
        $table->dropColumn(['question_id']);
    }
}
