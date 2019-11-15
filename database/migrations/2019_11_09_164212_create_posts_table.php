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
            $table->string('name')->unique();
            $table->text('content');
            $table->string('alias');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')->on('categorys')
                ->onDelete('cascade');

            $table->integer('source_id');
            $table->integer('status');
            $table->integer('count_see');
            $table->string('keyword');
            $table->string('description');
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
