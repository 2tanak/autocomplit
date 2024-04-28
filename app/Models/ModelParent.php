<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\FilterModel;

class ModelParent extends Model {
	use FilterModel;

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);
		
        
    }

}
