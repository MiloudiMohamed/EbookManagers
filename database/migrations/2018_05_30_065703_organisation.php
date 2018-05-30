<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Organisation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->collation('utf8_general_ci');
            $table->string('postal_address1',255)->collation('utf8_general_ci')->nullable();
            $table->string('postal_address2',255)->collation('utf8_general_ci')->nullable();
            $table->string('postal_address3',255)->collation('utf8_general_ci')->nullable();
            $table->string('postal_postcode',10)->collation('utf8_general_ci')->nullable();
            $table->string('postal_country',100)->collation('utf8_general_ci')->nullable();
            $table->string('address1',255)->collation('utf8_general_ci')->nullable();
            $table->string('address2',255)->collation('utf8_general_ci')->nullable();
            $table->string('address3',255)->collation('utf8_general_ci')->nullable();
            $table->string('postcode',10)->collation('utf8_general_ci')->nullable();
            $table->string('country',100)->collation('utf8_general_ci')->nullable();
            $table->string('telephone',20)->collation('utf8_general_ci')->nullable();
            $table->string('telephone2',20)->collation('utf8_general_ci')->nullable();
            $table->string('email',100)->collation('utf8_general_ci')->nullable();
            $table->string('primarycontact',100)->collation('utf8_general_ci')->nullable();
            $table->string('accountscontact',100)->collation('utf8_general_ci')->nullable();
            $table->string('subject',255)->collation('utf8_general_ci')->nullable();
            $table->string('from',255)->collation('utf8_general_ci')->nullable();
            $table->text('template')->collation('utf8_general_ci')->nullable();
            $table->string('acsid',50)->collation('utf8_general_ci');
            $table->string('shared_secret',40)->collation('utf8_general_ci');
            $table->tinyInteger('opt_mass_emailer')->unsigned()->comment('Allow new emailer feature for adding multiple books')->nullable();
            $table->tinyInteger('opt_reports')->nullable()->comment('Allow new reporting feature for email log');
            $table->tinyInteger('opt_loans')->nullable();
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
        Schema::dropIfExists('organisations');
    }
}
