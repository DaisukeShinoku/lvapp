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
        Schema::create('courses', function (Blueprint $table) {
            $table->tinyInteger('course_id')->primary()->comment('経路ID');
            $table->tinyInteger('place_id')->comment('出発地ID');
            $table->foreign('place_id')->references('place_id')->on('places')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('name')->comment('経路名');
            $table->string('gmap_url')->comment('GoogleMapURL');
            $table->boolean('outside_flg')->comment('屋外フラグ');
            $table->boolean('car_flg')->comment('車使用フラグ');
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
        Schema::dropIfExists('courses');
    }
};
