<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('course_id');
            $table->string('title')->nullable();
            $table->string('slung')->nullable();
            $table->string('placeholder')->nullable();
            $table->text('meta')->nullable();
            $table->text('content')->nullable();
            $table->string('video')->nullable();
            $table->string('video_views')->nullable()->default('2');
            $table->string('video_duration')->nullable();
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
        Schema::dropIfExists('topics');
    }
}
