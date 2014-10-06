<?php namespace Matalina\KidsPledge\Repository;

use Matalina\KidsPledge\Interfaces\ChoreInterface;
use Matalina\KidsPledge\Model\Chore;

class ChoreDb implements ChoreInterface
{
    protected $errors;
    
    public function create()
    {
        $chore = new Chore();
        $chore->save();
        
        if($chore->errors()->count() > 0) {
            $this->errors = $chore->errors();
            return false;
        }
        else {
            return true;
        }
    }
    
    public function getAll() 
    {
        return Chore::paginate(\Config::get('kidspledge.items-per-page'));
    }
    
    public function getById($id)
    {
        return Chore::where('id','=', (int) $id)->first();
    }
    
    public function edit($id)
    {
        $chore = Chore::where('id','=',(int) $id)->first();
        $chore->save();
        
        if($chore->errors()->count() > 0) {
            $this->errors = $chore->errors();
            return false;
        }
        else {
            return true;
        }
    }
    
    public function delete($id)
    {
        $chore = Chore::where('id','=',(int) $id)->first();
        $chore->delete();
        
        return true;
    }
    
    public function getErrors()
    {
        return $this->errors;
    }
}