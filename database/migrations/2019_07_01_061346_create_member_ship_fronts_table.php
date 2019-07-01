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
            $table->string('firstname');
            $table->string('lastname');
            $table->text('address')->nullable();
            $table->integer('pincode')->nullable();
            $table->string('fax')->nullable();
            $table->string('mobile');
            $table->string('email')->unique();
            $table->date('birthdate');
            $table->string('caste');
            $table->text('originalplace')->nullable();
            $table->string('loksabha')->nullable();
            $table->string('vidhansabha')->nullable();
            $table->string('panchayat')->nullable();
            $table->text('businessname');
            $table->text('officeaddress');
            $table->string('category_id')->nullable();
            $table->boolean('celebrity')->nullable();
            $table->text('celebrity_details')->nullable();
            $table->string('married')->nullable();
            $table->text('image');

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
