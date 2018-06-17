<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewworkspacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newworkspaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Surname');
            $table->string('Firstname');
            $table->string('Othernames');
            $table->string('Sex');
            $table->string('Email');
            $table->string('PhoneNumber');
            $table->string('AgeBracket');
            $table->string('DataSource');
            $table->string('DataLocation');
            $table->string('Organization');
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
        Schema::dropIfExists('newworkspaces');
    }
}
