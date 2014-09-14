<?php namespace Matalina\KidsPledge\Model;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\Reminders\RemindableTrait;
use \Zizaco\Confide\ConfideUserInterface;
use \Zizaco\Confide\ConfideUser;

class User extends \Eloquent implements ConfideUserInterface {

	use UserTrait, RemindableTrait, ConfideUser;

	protected $table = 'users';
	protected $hidden = array('password', 'remember_token');

    public function chores()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Models\\Chore');
    }

    public function checklist()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Models\\Checklist');
    }

    public function money()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Models\\Money');
    }

    public function punishments()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Models\\Punisment');
    }

    public function settings()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Models\\Setting');
    }

    public function events()
    {
        return $this->belongsToMany('Matalina\\KidsPledge\\Models\\Event');
    }
}
