<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBussinessListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bussiness_listings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('locations');
            $table->string('name');
            $table->text('description');
            $table->float('price');
            $table->text('opening_time');
            $table->text('closing_time');
            $table->integer('views');
            $table->text('video');
            $table->boolean('status')->default('0');

            //            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
//            $table->foreign('locations')->references('id')->on('locations')->onDelete('cascade');
            //            $table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade');

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
        Schema::dropIfExists('bussiness_listings');
    }
}
