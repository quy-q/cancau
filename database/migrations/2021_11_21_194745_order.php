<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('order', function (Blueprint $table) {
            $table->increments("ido");
            $table->DateTime('orderday');
            $table->DateTime('shipday');
            $table->string('namecus',30);
            $table->string('address');
            $table->double('totalm',8,2);
            $table->string('note',200);
            $table->boolean('status');
            $table->tinyInteger('delipay');
            $table->double('shipm',8,2);

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
