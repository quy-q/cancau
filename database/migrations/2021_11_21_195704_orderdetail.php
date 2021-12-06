<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orderdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('orderDetail', function (Blueprint $table) {
            $table->increments("idd");
            $table->unsignedInteger("IdO");
            $table->unsignedInteger("IdP");
            $table->string('NameP',30);
            $table->double('Price',8,2);
            $table->double('Quality',8,2);
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
