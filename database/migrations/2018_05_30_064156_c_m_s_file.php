<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CMSFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmsfiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->collation('utf8_general_ci');
            $table->string('mimetype',25)->collation('utf8_general_ci')->nullable();
            $table->integer('filesize')->unsigned()->nullable();
            $table->string('checksum',25)->collation('utf8_general_ci')->nullable();
            $table->string('extension',5)->collation('utf8_general_ci')->nullable();
            $table->integer('book_id')->unsigned();
            $table->integer('filetype_id')->unsigned();
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
