<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('slug')->nullable();
          $table->text('description')->nullable();
          $table->longText('content')->nullable();
          $table->integer('author_id')->unsigned()->nullable();
          $table->integer('parent_id')->unsigned()->nullable();
          $table->integer('featured')->unsigned()->nullable()->default(0);
          $table->string('status')->nullable(false)->default('publish');
          $table->longText('extras')->nullable();
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
        Schema::dropIfExists('listings');
    }
}
