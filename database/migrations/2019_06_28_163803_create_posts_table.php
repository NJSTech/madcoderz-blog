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
            $table->string('title');
            $table->string('slug');
            $table->longText('body');
            $table->unsignedInteger('categtory_id');
            $table->unsignedBigInteger('userable_id');
            $table->string('userable_type');
            $table->tinyInteger('status')->default(0)->comment('0 => Unpublished, 1 => Published');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('categtory_id')->references('id')->on('categories')->onDelete('cascade');
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
