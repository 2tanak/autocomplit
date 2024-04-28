<?php

namespace App\Models;
use App\Http\Services\ImageService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Filter;
use Illuminate\Database\Eloquent\Relations\MorphOne;
class Airport extends ModelParent

{
    use HasFactory;
	protected $table = 'airports';
	protected $filter_class = Filter::class; 
	protected $with=['languages'];
    protected $fillable = [
        'name',
        'area',
		'city',
		'airport_name',
        'country',
		'timezone'
    ];
	
    public function languages(): MorphOne
    {
        return $this->morphOne(Language::class, 'languageable');
    }
   
}
