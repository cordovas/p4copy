<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_tag', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            # `message_id` and `tag_id` will be foreign keys, so they have to be unsigned
            #  Note how the field names here correspond to the tables they will connect...
            # `message_id` will reference the `books table` and `tag_id` will reference the `tags` table.
            $table->integer('message_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            # Make foreign keys
            $table->foreign('message_id')->references('id')->on('messages');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message_tag');
    }
}
