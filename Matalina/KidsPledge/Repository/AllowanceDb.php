<?php namespace Matalina\KidsPledge\Repository;
use Matalina\KidsPledge\Interfaces\AllowanceInterface;
use Matalina\KidsPledge\Model\Allowance;

class AllowanceDb implements AllowanceInterface
{
    protected $errors;
    
    public function create()
    {
        $allowance = new Allowance();
        $allowance->save();
        
        if($allowance->errors()->count() > 0) {
            $this->errors = $allowance->errors();
            return false;
        }
        else {
            return true;
        }
    }
    
    public function getAll() 
    {
        return Allowance::paginate(Config::get('kidspledge.items-per-page'));
    }
    
    public function getById($id)
    {
        return Allowance::where('id','=', (int) $id)->first();
    }
    
    public function edit($id)
    {
        $allowance = Allowance::where('id','=',(int) $id)->first();
        $allowance->save();
        
        if($allowance->errors()->count() > 0) {
            $this->errors = $allowance->errors();
            return false;
        }
        else {
            return true;
        }
    }
    
    public function delete($id)
    {
        $allowance = Allowance::where('id','=',(int) $id)->first();
        $allowance->delete();
        
        return true;
    }
    
    public function getErrors()
    {
        return $this->errors;
    }
}