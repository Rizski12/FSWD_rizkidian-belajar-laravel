<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('user_groups', function (Blueprint $table) {
            $table->id();
            $table->string('group_name', 255);
            $table->timestamps();
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->enum('is_active', ['1', '0'])->default('1');
            $table->string('description', 255)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_groups');
    }
}
