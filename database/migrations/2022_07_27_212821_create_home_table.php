<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string('slider_img_1')->nullable();
            $table->string('slider_img_2')->nullable();
            $table->string('slider_img_3')->nullable();
            $table->string('slider_title_1_ar')->nullable();
            $table->string('slider_title_2_ar')->nullable();
            $table->string('slider_title_3_ar')->nullable();
            $table->string('slider_title_1_en')->nullable();
            $table->string('slider_title_2_en')->nullable();
            $table->string('slider_title_3_en')->nullable();
            $table->text('slider_desc_1_ar')->nullable();
            $table->text('slider_desc_2_ar')->nullable();
            $table->text('slider_desc_3_ar')->nullable();
            $table->text('slider_desc_1_en')->nullable();
            $table->text('slider_desc_2_en')->nullable();
            $table->text('slider_desc_3_en')->nullable();
            $table->integer('establish')->nullable();
            $table->integer('projects')->nullable();
            $table->integer('employees')->nullable();
            $table->integer('customers')->nullable();
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
        Schema::dropIfExists('home');
    }
}
