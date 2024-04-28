<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

use App\Models\Role;

use Illuminate\Support\Facades\Hash;

use App\Models\Language;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		
        $path = public_path('/json/countries.json');
		$file = json_decode(file_get_contents($path));
		foreach($file as $item){
			
			$language_en = new Language(['name'=>$item->name->en,'lang'=>'en']);
	        $country = Country::create(['name'=>$item->name->ru,'continent'=>$item->continent]);
		    $language_en->languageable()->associate($country)->save();
		  }
		
    }
}
