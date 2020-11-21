<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->integer('user_id');
            $table->string('address',220)->nullable();
            $table->string('phone',10)->nullable();
            $table->string('receiver_name',50)->nullable();
            $table->tinyInteger('is_default')->default(1);//1 is default, 0 is in this table
            $table->float('total_price');
            //0 - pending,
            // 1 - đã giao,
            // 2- đang giao,
            // 3- đã nhận,
            // 4- đã huỷ
            $table->tinyInteger('status')->default(0);
            $table->text('note',500);//ghi chu tu nguoi dung
            $table->tinyInteger('payment_method')->default(0);//0-COD, 1-stripe
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
        //
       
    }
}
