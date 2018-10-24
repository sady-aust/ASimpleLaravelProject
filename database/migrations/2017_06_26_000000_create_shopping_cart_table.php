<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingCartTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('shopping_cart', function (Blueprint $table) {
            $table->string('id',150);
            $table->string('instance',150);
            $table->longText('content');
            $table->nullableTimestamps();

            $table->primary(['id', 'instance']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('shopping_cart');
    }
}
