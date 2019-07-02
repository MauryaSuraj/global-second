<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullaname');
            $table->date('birthdate');
            $table->string('married');
            $table->boolean('is_member')->default(0);
            $table->unsignedBigInteger('membership_id')->nullable();
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
        Schema::dropIfExists('family_member');
    }
}
