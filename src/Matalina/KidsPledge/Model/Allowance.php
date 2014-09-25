<?php namespace Matalina\KidsPledge\Model;

use LaravelBook\Ardent\Facades\Ardent;

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
}