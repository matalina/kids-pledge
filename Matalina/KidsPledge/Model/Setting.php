<?php namespace Matalina\KidsPledge\Model;

use LaravelBook\Ardent;

class Setting extends Ardent
{
    public static $rules = [
        'setting' => 'required',
        'for_all' => 'required|boolean'
    ];

    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Model\\User');
    }
}