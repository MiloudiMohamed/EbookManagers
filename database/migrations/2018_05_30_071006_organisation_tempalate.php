<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrganisationTempalate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisation_tempplates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('organisation_id')->unsigned()->nullable();
            $table->string('name', 255)->collation('latin1_swedish_ci');
            $table->string('subject', 255)->collation('latin1_swedish_ci')->nullable();
            $table->string('from', 255)->collation('latin1_swedish_ci')->nullable();
            $table->text('template')->collation('latin1_swedish_ci')->nullable();
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
