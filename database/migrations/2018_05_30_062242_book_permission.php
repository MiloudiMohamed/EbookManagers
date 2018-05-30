<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type',10)->collation('utf8_general_ci')->default('buy');
            $table->string('render_type',10)->collation('utf8_general_ci')->default('display');
            $table->tinyInteger('allowed')->nullable()->default(1);
            $table->integer('initial')->nullable();
            $table->integer('accrue')->nullable();
            $table->integer('max')->nullable();
            $table->integer('max_resolution')->nullable();
            $table->integer('expires')->nullable();
            $table->date('expires_on')->nullable();
            $table->tinyInteger('single_device')->nullable()->default(0);
            $table->string('device_type','10')->collation('utf8_general_ci')->nullable();
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
