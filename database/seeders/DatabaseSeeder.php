<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $path = public_path('sql/airports.sql');
	    //$path = '/sql/lib_country.sql';
        \DB::unprepared(file_get_contents($path));
        $this->command->info('install airports.sql seeded!');
		
		 $path2 = public_path('sql/languages.sql');
	    //$path = '/sql/lib_country.sql';
        \DB::unprepared(file_get_contents($path2));
        $this->command->info('install languages.sql seeded!');
        
    }
}
