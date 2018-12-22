<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('slug')->unique();
          // $table->xxx('term_group');
          // $table->xxx('term_taxonomy_id');
          // $table->xxx('taxonomy');
          $table->text('description')->nullable();
          $table->integer('parent')->unsigned()->nullable();
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
        Schema::dropIfExists('tags');
    }
}
