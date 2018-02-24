<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku_wholesalers');
            $table->string('sku_myshop');
            $table->integer('stock');
            $table->integer('amount');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedInteger('wholesaler_id');
            $table->foreign('wholesalers_id')->references('id')->on('wholesalers');
            $table->integer('invoice');
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
        DB::statement('ALTER TABLE warehouses DISABLE TRIGGER ALL');
        Schema::dropIfExists('warehouses');
    }
}
