<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('log_books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('role');
            $table->string('action');
            $table->string('property_type');
            $table->string('property_id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('log_books');
    }
};
