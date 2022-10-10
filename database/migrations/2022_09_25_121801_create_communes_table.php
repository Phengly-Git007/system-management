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
        Schema::create('communes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('district')->nullable();
            $table->string('code',100)->nullable();
            $table->string('name',100);
            $table->string('kh_name',150);
            $table->string('modify_date',100)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('prefix',100)->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('district')->references('id')->on('districts')
            ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communes');
    }
};
