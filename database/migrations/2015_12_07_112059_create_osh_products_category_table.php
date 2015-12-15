<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOshProductsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('osh_products_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_name_en', 255);
            $table->string('category_name_th', 255);
            $table->string('icon', 255)->nullable();
            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('osh_products_category');
    }
}
