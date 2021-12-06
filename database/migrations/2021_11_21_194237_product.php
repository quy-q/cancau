<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('product', function (Blueprint $table) {
            $table->increments("idp");
            $table->string('UrlP',200);
            $table->string('NameP',255)->unique();
            $table->double('Price',15,2);
            $table->text('Des');
            $table->integer('quantity');
            $table->boolean('AnHien');
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
