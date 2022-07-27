<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('comp_name_ar')->nullable();
            $table->string('comp_name_en')->nullable();
            $table->text('desc_ar')->nullable();
            $table->text('desc_en')->nullable();
            $table->string('image')->nullable();
            $table->string('founder_1_img')->nullable();
            $table->string('founder_2_img')->nullable();
            $table->text('founders_msg_ar')->nullable();
            $table->text('founders_msg_en')->nullable();
            $table->unsignedBigInteger('added_by')->nullable();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('about');
    }
}
