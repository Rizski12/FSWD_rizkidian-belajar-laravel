<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_id');
            $table->integer('product_id')->nullable();
            $table->integer('quantity');
            $table->timestamps();
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->decimal('amount_total', 15, 2)->default('0.00');
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchase_details');
    }
}
