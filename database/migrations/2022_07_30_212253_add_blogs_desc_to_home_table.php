<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBlogsDescToHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home', function (Blueprint $table) {
            $table->text('blogs_desc_en')->after('projects_desc_ar')->nullable();
            $table->text('blogs_desc_ar')->after('blogs_desc_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home', function (Blueprint $table) {
            //
        });
    }
}
