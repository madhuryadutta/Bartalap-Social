<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->enum('gender', ['M', 'F', 'O'])->nullable();
            $table->string('occupation')->nullable();
            $table->date('dob')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('current_city')->nullable();
            $table->string('hometown')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('relationship_status')->nullable();
            $table->string('about_me')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('cover_pic')->nullable();
            $table->boolean('bluetick')->default(0);
            $table->boolean('lock_status')->default(0);
            $table->boolean('account_status')->default(0);
            $table->timestamps();
            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
