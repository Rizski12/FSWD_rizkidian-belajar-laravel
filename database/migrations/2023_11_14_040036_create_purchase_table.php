<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseTable extends Migration
{
    public function up()
    {
        Schema::create('purchase', function (Blueprint $table) {
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
            $table->integer('vendor_id');
            $table->text('description')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchase');
    }
}

