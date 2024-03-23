<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airmails', function (Blueprint $table) {
            $table->id();
            $table->string('msg_text', 127);
            $table->unsignedBigInteger('msg_ref');
            // store msg and image using the same field.to deltermine wheather the string is text message or link to media msg_type will be used
            $table->string('msg_type', 3);
            $table->boolean('soft_del')->default(0);
            $table->unsignedBigInteger('sender_user_id');
            $table->foreign('sender_user_id')->references('id')->on('users');
            $table->unsignedBigInteger('receiver_user_id');
            $table->foreign('receiver_user_id')->references('id')->on('users');
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
        Schema::dropIfExists('airmails');
    }
};
