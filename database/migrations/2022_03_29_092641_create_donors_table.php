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
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("gender");
            $table->integer("age");
            $table->string("bloodGroup");
            $table->date("covid_positive_date");
            $table->date("covid_negative_date");
            $table->integer('state_id');
            $table->integer("city_id");
            $table->integer("phone_no");
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
        Schema::dropIfExists('donors');
    }
};
