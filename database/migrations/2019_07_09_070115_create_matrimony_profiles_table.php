<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatrimonyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matrimony_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('profile_for')->nullable();
            $table->string('name');
            $table->string('gender');
            $table->string('date_of_birth')->nullable();
            $table->string('caste')->nullable();
            $table->string('religion')->nullable();
            $table->string('mother_toungue')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable()->unique();
            $table->integer('age')->nullable();
            $table->float('height')->nullable();
            $table->string('complexion')->nullable();
            $table->text('education')->nullable();
            $table->text('location')->nullable();
            $table->string('profession')->nullable();
            $table->string('marital_status')->nullable();
            $table->double('salary')->nullable();
            $table->string('sun_sign')->nullable();
            $table->string('moon_sign')->nullable();
            $table->text('family_bg')->nullable();
            $table->longText('partner_expectation')->nullable();
            $table->string('diet')->nullable();
            $table->text('profile_image')->nullable();
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
        Schema::dropIfExists('matrimony_profiles');
    }
}
