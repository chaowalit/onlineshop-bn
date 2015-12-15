<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOshProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('osh_products', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('dn_fk_osh_products_category_id')->index();
            $table->string('dn_category_name_en', 255);
            $table->string('dn_category_name_th', 255);
            $table->string('dn_category_icon', 255)->nullable();

            

            $table->string('products_no', 128)->unique();
            $table->string('products_name_en', 255);
            $table->string('products_name_th', 255);
            $table->text('products_specifications_en')->nullable();
            $table->text('products_specifications_th')->nullable();
            $table->text('products_desc_en');
            $table->text('products_desc_th');
            $table->decimal('price_normal', 10, 2)->default(0.00);
            $table->decimal('price_special', 10, 2)->default(0.00);
            $table->integer('amount')->default(0);
            $table->enum('status', ['active', 'inactive', 'empty']);
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
        Schema::drop('osh_products');
    }
}
