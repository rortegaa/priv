<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavingFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saving_funds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('district_id');
            $table->decimal('saving_funds',18,2);
            $table->integer('year');
            $table->timestamps();

            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saving_funds');
    }
}
