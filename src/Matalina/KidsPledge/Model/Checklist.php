<?php namespace Matalina\KidsPledge\Model;

use LaravelBook\Ardent\Facades\Ardent;

class Checklist extends Ardent
{
    public static $rules = [
        'user_id' => 'required',
        'chore_id' => 'required'
    ];

    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Model\\User');
    }

    public function chores()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Model\\Chore');
    }
}