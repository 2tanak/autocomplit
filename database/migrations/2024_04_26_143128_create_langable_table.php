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
        Schema::create('languages', function (Blueprint $table) {
			$table->engine = 'MyISAM'; 
            $table->id();
			$table->string('city_name',255)->nullable();
			$table->string('country_name',255)->nullable();
			$table->string('airport_name',255)->nullable();
			$table->string('lang',255)->nullable();
			$table->integer('languageable_id');
			$table->string('languageable_type');
            $table->timestamps();
        });
		 \DB::statement('ALTER TABLE languages ADD FULLTEXT search(airport_name)');
		 
		 
		
		 
		 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
		
		Schema::table('languages', function($table) {
            $table->dropIndex('search');
        });
    }
};
