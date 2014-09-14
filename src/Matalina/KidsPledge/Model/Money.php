<?php namespace Matalina\KidsPledge\Model;

use LaravelBook\Ardent\Facades\Ardent;

class Money extends Ardent
{
    public static $rules = [
        'debit_credit' => 'required|boolean',
        'amount' => 'required|numeric',
        'user_id' => 'required'
    ];

    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Model\\User');
    }
}