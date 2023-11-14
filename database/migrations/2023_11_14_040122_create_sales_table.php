<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('code', 20)->unique();
            $table->date('trx_date');
            $table->decimal('sub_amount', 15, 2)->nullable();
            $table->decimal('amount_total', 15, 2)->nullable();
            $table->decimal('discount_amount', 15, 0)->nullable();
            $table->timestamps();
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->integer('total_products')->nullable();
            $table->integer('customer_id');
            $table->text('description')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
