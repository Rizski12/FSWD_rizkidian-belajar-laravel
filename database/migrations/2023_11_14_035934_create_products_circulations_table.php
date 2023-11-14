<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsCirculationsTable extends Migration
{
    public function up()
    {
        Schema::create('products_circulations', function (Blueprint $table) {
            $table->id();
            $table->date('trx_date');
            $table->string('reff', 20)->nullable();
            $table->integer('in')->default(0);
            $table->integer('out')->default(0);
            $table->integer('product_id');
            $table->integer('remaining_stock');
            $table->timestamps();
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products_circulations');
    }
}
