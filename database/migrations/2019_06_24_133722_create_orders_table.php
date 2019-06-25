<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('Order_Id');
            $table->integer('User_Id');
            $table->integer('Service_Id');
            $table->string('Order_Title')->nullable();
            $table->string('Order_Types')->nullable();
            $table->longtext('Order_content')->nullable();
            $table->string('Payments')->nullable();
            $table->integer('Order_Status')->default(1);
            $table->date('pickdate');
            $table->date('dropdate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
