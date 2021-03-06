<?php namespace Matalina\KidsPledge\Model;

use LaravelBook\Ardent\Ardent;

class Punishment extends Ardent
{
    public static $rules = [
        'punishment' => 'required',
        'get_back_pts' => 'required|integer'
    ];

    protected $guarded = ['id'];
    public $autoHydrateEntityFromInput = true;  
    public $forceEntityHydrationFromInput = true;
    public $autoPurgeRedundantAttributes = true;

    public function users()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Model\\User');
    }

    public function chores()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Model\\Chore');
    }
}