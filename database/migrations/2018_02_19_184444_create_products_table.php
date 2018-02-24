<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ean');
            $table->string('name');
            $table->text('description');
            $table->string('short_desc');
            $table->string('dimension')->nullable();
            $table->string('img')->nullable();
            $table->string('brand_name');
            $table->smallInteger('warranty');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->softDeletes();
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
        DB::statement('ALTER TABLE products DISABLE TRIGGER ALL');
        Schema::dropIfExists('products');
    }
}
