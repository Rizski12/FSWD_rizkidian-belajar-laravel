<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->foreignId('category_id')->constrained('product_categories')->onDelete('restrict')->onUpdate('cascade');
            $table->string('product_code')->nullable()->unique();
            $table->enum('is_active', ['1', '0'])->default('1');
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2)->default('0.00');
            $table->string('unit', 100)->default('PCS');
            $table->decimal('discount_amount', 15, 2)->default('0.00');
            $table->integer('stock')->default('0');
            $table->text('image')->nullable();
            $table->index(['created_at', 'updated_at']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
