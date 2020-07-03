<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       public function up()
    {
        Schema::create('tb_photo', function (Blueprint $table) {
            $table->increments('photo_id');
            $table->date('photo_date');
            $table->string('photo_title');
            $table->text('photo_text');
            $table->unsignedInteger('photo_post_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_photo');
    }
}
