<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('short_title')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('about_image')->nullable();

            $table->string('institute_name1')->nullable();
            $table->string('year1')->nullable();
            $table->string('cgpa_description1')->nullable();

            $table->string('institute_name2')->nullable();
            $table->string('year2')->nullable();
            $table->string('cgpa_description2')->nullable();

            $table->string('institute_name3')->nullable();
            $table->string('year3')->nullable();
            $table->string('cgpa_description3')->nullable();

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
        Schema::dropIfExists('abouts');
    }
}
