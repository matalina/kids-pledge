<?php namespace Matalina\KidsPledge\Model;

use LaravelBook\Ardent\Ardent;

class Chore extends Ardent
{
    public static $rules = [
        'chore' => 'required',
        'points' => 'required|integer'
    ];

    protected $guarded = ['id'];
    public $autoHydrateEntityFromInput = true;  
    public $forceEntityHydrationFromInput = true;
    public $autoPurgeRedundantAttributes = true;

    public function users()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Model\\User');
    }

    public function punishments()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Model\\Punishment');
    }

    public function checklist()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Model\\Checklist','users_checklist');
    }
}