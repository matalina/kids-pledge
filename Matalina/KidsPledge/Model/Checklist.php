<?php namespace Matalina\KidsPledge\Model;

use LaravelBook\Ardent;

class Checklist extends Ardent
{
    public static $rules = [
        'user_id' => 'required',
        'chore_id' => 'required'
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