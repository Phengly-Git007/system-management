<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_officers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_kh');
            $table->boolean('gender');
            $table->date('dob');
            $table->string('id_card');
            $table->string('phone');
            $table->string("address");
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
        Schema::dropIfExists('credit_officers');
    }
};
