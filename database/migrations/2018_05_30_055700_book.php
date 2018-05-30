<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Book extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('organisation_id')->unsigned();
            $table->integer('publisher_id')->unsigned()->nullable();
            $table->string('title')->collation('utf8_general_ci');
            $table->string('creator')->nullable()->collation('utf8_general_ci');
            $table->string('record_reference',20)->nullable()->collation('utf8_general_ci');
            $table->string('doi',10)->nullable()->collation('utf8_general_ci');
            $table->string('isbn',13)->nullable()->collation('utf8_general_ci');
            $table->string('language',2)->nullable()->default('en')->collation('utf8_general_ci');
            $table->integer('epubtype_id')->unsigned();
            $table->integer('organisation_template_id')->unsigned()->nullable();
            $table->string('resource',50)->nullable()->collation('utf8_general_ci');
            $table->text('description')->nullable()->collation('utf8_general_ci');
            $table->tinyInteger('packaged')->nullable()->unsigned()->default(0);
            $table->tinyInteger('loan')->nullable()->unsigned()->default(0);
            $table->integer('loan_max')->unsigned()->nullable();
            $table->tinyInteger('archived')->unsigned()->default(0);
            $table->dateTime('created')->nullable();
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
        Schema::dropIfExists('books');
    }
}
