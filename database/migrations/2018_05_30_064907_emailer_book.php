<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmailerBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emailer_books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('email_id')->unsigned()->nullable();
            $table->integer('book_id')->unsigned()->nullable();
            $table->text('url')->collation('utf8_unicode_ci')->nullable();
            $table->dateTime('click_time')->nullable();
            $table->dateTime('download_time')->nullable();
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
