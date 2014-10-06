<?php namespace Matalina\KidsPledge\Model;

use LaravelBook\Ardent\Ardent;

class Allowance extends Ardent
{
    public static $rules = [
        'category' => 'required',
        'percent' => 'required|numeric|max:1.0'
    ];

    protected $guarded = ['id'];
    public $autoHydrateEntityFromInput = true;  
    public $forceEntityHydrationFromInput = true;
    public $autoPurgeRedundantAttributes = true;
    
    public function setPercentAttribute($value)
    {
        $this->attributes['percent'] = $value / 100;
    }
    
    public function getPercentAttribute()
    {
        return $this->attributes['percent'] * 100;
    }
}