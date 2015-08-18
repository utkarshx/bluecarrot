<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThumbnailsHash extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thumbnails', function (Blueprint $table) {
            $table->increments('hash_id');
            $table->string('thumbnail_type');
            $table->string('thumbnail_full_image');
            $table->string('thumbnail_part_image');
            $table->string('thumbnail_title');
            $table->text('thumbnail_description');
            $table->text('source_title');
            $table->text('source_image');
            $table->string('link_url');
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
        Schema::drop('thumbnails');
    }
}
