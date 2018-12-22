<?php

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
            $table->increments('ID')->unsigned()->nullable(false);
            $table->bigInteger('post_author')->unsigned()->nullable(false)->default('0');
            $table->timestamp('post_date')->nullable()->default(NULL);
            $table->timestamp('post_date_gmt')->nullable()->default(NULL);
            $table->longText('post_content')->nullable(false);
            $table->text('post_title')->nullable(false);
            $table->text('post_excerpt')->nullable(false);
            $table->string('post_status', 20)->nullable(false)->default('publish');
            $table->string('comment_status', 20)->nullable(false)->default('open');
            $table->string('ping_status', 20)->nullable(false)->default('open');
            $table->string('post_password', 255)->nullable(false)->default('');
            $table->string('post_name', 200)->nullable(false)->default('');
            $table->text('to_ping')->nullable(false);
            $table->text('pinged')->nullable(false);
            $table->timestamp('post_modified')->nullable()->default(NULL);
            $table->timestamp('post_modified_gmt')->nullable()->default(NULL);
            $table->longText('post_content_filtered')->nullable(false);
            $table->bigInteger('post_parent')->unsigned()->nullable(false)->default('0');
            $table->string('guid', 255)->nullable(false)->default('');
            $table->integer('menu_order')->nullable(false)->default('0');
            $table->string('post_type', 20)->nullable(false)->default('post');
            $table->string('post_mime_type', 100)->nullable(false)->default('');
            $table->bigInteger('comment_count')->nullable(false)->default('0');
            // $table->timestamps();
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
