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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_subject');
            $table->string('contact_message');
            $table->string('contact_linkedin_link')->nullable();
            $table->string('contact_github_link')->nullable();
            $table->string('contact_twitter')->nullable();
            $table->string('contact_dribble')->nullable();

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
        Schema::dropIfExists('user');
    }
};
