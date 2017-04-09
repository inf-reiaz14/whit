<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('designation');
            $table->string('image_photo');
            $table->string('display_group');
            $table->string('location');
            $table->integer('country_id')->unsigned()->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');
            $table->string('i_am');
            $table->string('email');
            $table->string('summary');
            $table->string('google_plus_link');
            $table->string('skype_link');
            $table->string('linkedin_link');
            $table->string('twitter_link');
            $table->string('facebook_link');
            $table->string('webhawksit_link');
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
        Schema::drop('advisors');
    }
}
