<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('user_socials', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->unsigned();
            $table->string('social_network');
            $table->string('social_id');
            $table->string('social_email');
            $table->string('social_avatar');

            $table->timestamps();
            // user_id faz referencia a coluna/campo id na tabela users
            $table->foreign('user_id')->references('id')->on('users');
            // social_email faz referencia a coluna/campo email na tabela users
            $table->foreign('social_email')->references('email')->on('users');
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::table('user_socials', function (Blueprint $table) {
            $table->dropForeign('user_socials_user_id_foreign');
            $table->dropForeign('user_socials_social_email_foreign');
        });

        Schema::dropIfExists('user_socials');
        */
    }
}
