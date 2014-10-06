<?php namespace Matalina\KidsPledge\Model;

use LaravelBook\Ardent\Ardent;

class Setting extends Ardent
{
    public static $rules = [
        'setting' => 'required',
        'for_all' => 'required|boolean'
    ];

    protected $guarded = ['id'];
    public $autoHydrateEntityFromInput = true;  
    public $forceEntityHydrationFromInput = true;
    public $autoPurgeRedundantAttributes = true;

    public function users()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Model\\User');
    }
}