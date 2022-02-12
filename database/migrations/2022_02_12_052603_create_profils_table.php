<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('userId');

            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');

            $table->string('tittle');
            $table->string('occupation');

            $table->string('institution');
            $table->string('country');

            $table->string('email');
            $table->string('mobilePhone');

            $table->string('registerAs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profils');
    }
}
