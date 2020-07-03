<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('tb_post', function (Blueprint $table) {
            $table->increments('post_id');
            $table->date('post_date');
            $table->string('post_slug');
            $table->string('post_title');
            $table->text('post_text');
            $table->unsignedInteger('post_cat_id');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_mhsw');
    }
}
