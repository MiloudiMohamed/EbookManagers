<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Emailer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emailers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',100)->collation('latin1_swedish_ci')->nullable();
            $table->string('last_name',100)->collation('latin1_swedish_ci')->nullable();
            $table->string('email',150)->collation('latin1_swedish_ci')->nullable();
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
