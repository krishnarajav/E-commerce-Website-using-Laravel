<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('pin');
            $table->string('payment_method')->nullable();
            $table->string('order_id')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
