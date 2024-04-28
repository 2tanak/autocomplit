<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

use App\Models\Role;

use Illuminate\Support\Facades\Hash;

use App\Models\Language;
use App\Models\Airport;

class AirportsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		
        $path = public_path('/json/airports.json');
		$file = json_decode(file_get_contents($path));
		foreach($file as $item){
			
			$language_en = new Language([
			'city_name'    => $item?->cityName?->en,
			'airport_name' => isset($item->airportName->en) ? $item->airportName->en : null,
			'lang'=>'en'
			]);
			$language_ru = new Language([
			'city_name'    => $item?->cityName?->ru,
			'airport_name' => isset($item->airportName->ru) ? $item->airportName->ru : null,
			'lang'=>'ru'
			]);
			
	        $airport = Airport::create([
			 'city'    => $item?->cityName?->ru,
			 'area'         => $item->area,
			 'country'      => $item->country,
			 'timezone'     => $item->timezone,
			 
			 ]);
		    $language_en->languageable()->associate($airport)->save();
			$language_ru->languageable()->associate($airport)->save();

		  }
		
    }
}
