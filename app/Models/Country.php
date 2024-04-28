<?php

namespace App\Models;
use App\Http\Services\ImageService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Molels\Language;
class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'continent',
		
        
    ];

     public function languages(): MorphMany
    {
        return $this->morphMany(Language::class, 'languageable');
    }
}
