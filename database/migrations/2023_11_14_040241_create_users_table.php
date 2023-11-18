<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 100)->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->string('username', 100);
            $table->string('password', 64)->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->timestamps();
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->unsignedBigInteger('group_id')->nullable(); // Kolom dapat bernilai null
            $table->enum('is_active', ['1', '0'])->default('1');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

