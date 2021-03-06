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
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('slug')->enique();
            $table->integer('cate_post_id')->unsigned()->nullable();
            $table->integer('position')->unique()->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('is_home')->default(0);
            $table->string('image')->nullable();
            $table->text('title')->nullable();
            $table->longText('description')->nullable();
            $table->text('content')->nullable();
            $table->text('content2')->nullable();
            $table->text('content3')->nullable();
            $table->text('title_seo')->nullable();
            $table->text('meta_key')->nullable();
            $table->text('meta_des')->nullable();
            $table->timestamps();
            $table->foreign('cate_post_id')->references('id')->on('cate_posts')->onDelete('cascade');
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
