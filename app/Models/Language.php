<?php

namespace App\Models;
use App\Http\Services\ImageService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Language extends ModelParent
{
    use HasFactory;
	protected $filter_class = Filter::class; 
    protected $fillable = [
	    'city_name',
		'country_name',
		'airport_name',
		'lang',
        'languageable_id',
        'languageable_type'
        
    ];

    public function languageable(): MorphTo
    {
        return $this->morphTo();
    }
}
