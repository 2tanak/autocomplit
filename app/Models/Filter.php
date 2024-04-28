<?php
namespace App\Models;

use App\Models\Services\ModelFilter;
use Auth;
use Illuminate\Support\Facades\Request;

class Filter extends ModelFilter {
    public function filter(){
		
		 if ($this->request->has('search')){
			
		    $this->query->whereRaw(
             "MATCH(airport_name) AGAINST(? IN BOOLEAN MODE)",
             array($this->request->search.'*'));
			
			}
		
		
    }

}
