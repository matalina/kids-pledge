<?php namespace Matalina\KidsPledge\Model;

use LaravelBook\Ardent\Facades\Ardent;

class Event extends Ardent
{
    public static $rules = [
        'user_id' => 'required',
        'added_by' => 'required',
        'date_of_event' => 'required|date',
        'duration' => 'required',
        'events' => 'required'
    ];

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Model\\User');
    }

    public function addedBy()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Model\\User');
    }
}