<?php namespace Matalina\KidsPledge\Repository;

use Matalina\KidsPledge\Interfaces\PunishmentInterface;
use Matalina\KidsPledge\Model\Punishment;

class PunishmentDb implements PunishmentInterface
{
    protected $errors;
    
    public function create()
    {
        $punishment = new Punishment();
        $punishment->save();
        
        if($punishment->errors()->count() > 0) {
            $this->errors = $punishment->errors();
            return false;
        }
        else {
            return true;
        }
    }
    
    public function getAll() 
    {
        return Punishment::paginate(\Config::get('kidspledge.items-per-page'));
    }
    
    public function getById($id)
    {
        return Punishment::where('id','=', (int) $id)->first();
    }
    
    public function edit($id)
    {
        $punishment = Punishment::where('id','=',(int) $id)->first();
        $punishment->save();
        
        if($punishment->errors()->count() > 0) {
            $this->errors = $punishment->errors();
            return false;
        }
        else {
            return true;
        }
    }
    
    public function delete($id)
    {
        $punishment = Punishment::where('id','=',(int) $id)->first();
        $punishment->delete();
        
        return true;
    }
    
    public function getErrors()
    {
        return $this->errors;
    }
}