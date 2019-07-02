<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberShipFrontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_ship_fronts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('address')->nullable();
            $table->integer('pincode')->nullable();
            $table->string('fax')->nullable();
            $table->string('mobile');
            $table->string('email')->unique();
            $table->date('birthdate')->nullable();
            $table->string('caste')->nullable();
            $table->text('originalplace')->nullable();
            $table->string('loksabha')->nullable();
            $table->string('vidhansabha')->nullable();
            $table->string('panchayat')->nullable();
            $table->text('businessname')->nullable();
            $table->text('officeaddress')->nullable();
            $table->string('category_id')->nullable();
            $table->boolean('celebrity')->nullable();
            $table->text('celebrity_details')->nullable();
            $table->string('married')->nullable();
            $table->text('image')->nullable();
            $table->string('user_id');

            $table->unsignedBigInteger('family_id')->nullable();

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
        Schema::dropIfExists('member_ship_fronts');
    }
}
