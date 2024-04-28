<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
			$table->string('name',255)->nullable();;
			$table->string('city',255);
			$table->string('area',255)->nullable();
			$table->string('lat',255)->nullable();
			$table->string('lng',255)->nullable();
			$table->string('country',255)->nullable();
			$table->string('timezone',255)->nullable();
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
        Schema::dropIfExists('airports');
    }
};
