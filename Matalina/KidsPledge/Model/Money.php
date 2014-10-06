<?php namespace Matalina\KidsPledge\Model;

use LaravelBook\Ardent\Ardent;

class Money extends Ardent
{
    public static $rules = [
        'debit_credit' => 'required|boolean',
        'amount' => 'required|numeric',
        'user_id' => 'required'
    ];

    protected $guarded = ['id'];
    public $autoHydrateEntityFromInput = true;  
    public $forceEntityHydrationFromInput = true;
    public $autoPurgeRedundantAttributes = true;

    public function users()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Model\\User');
    }
    
    public function addedBy()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Model\\User');
    }
}