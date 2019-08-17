<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('posttype'); //Er det et salgs -eller søgningsopslag?
            $table->string('title', 20);

            //Valgfrit
            $table->text('description')->nullable();
            $table->string('picture')->nullable();

            //Bliver brugt til at hente data fra andre tables, som bliver vist i post.
            $table->integer('employee')->refrences('id')->on('employees');
            $table->integer('company')->references('id')->on('users');
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
        Schema::dropIfExists('posts');
    }
}
