<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cate_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('slug')->unique();
            $table->integer('parent_id')->default(0);
            $table->integer('position')->unique()->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default(1);
            $table->text('title_seo')->nullable();
            $table->text('meta_key')->nullable();
            $table->text('meta_des')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('cate_posts');
    }
}
