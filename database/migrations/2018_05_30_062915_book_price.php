<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookPrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->char('currencycode')->collation('utf8_general_ci');
            $table->float('price',4)->default(0);
            $table->float('taxable',8,2)->default(0);
            $table->float('taxamount',8,2)->default(0);
            $table->date('fromdate');
            $table->date('todate');
            $table->integer('book_id')->unsigned();
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
        Schema::dropIfExists('book_permissions');
    }
}
