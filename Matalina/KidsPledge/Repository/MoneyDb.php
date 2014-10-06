<?php namespace Matalina\KidsPledge\Repository;

use Matalina\KidsPledge\Interfaces\MoneyInterface;
use Matalina\KidsPledge\Model\Money;

class MoneyDb implements MoneyInterface
{
    protected $errors;
    
    public function create()
    {
        $money = new Money();
        $money->save();
        
        if($money->errors()->count() > 0) {
            $this->errors = $money->errors();
            return false;
        }
        else {
            return true;
        }
    }
    
    public function getAll() 
    {
        return Money::paginate(\Config::get('kidspledge.items-per-page'));
    }
    
    public function getById($id)
    {
        return Money::where('id','=', (int) $id)->first();
    }
    
    public function edit($id)
    {
        $money = Money::where('id','=',(int) $id)->first();
        $money->save();
        
        if($money->errors()->count() > 0) {
            $this->errors = $money->errors();
            return false;
        }
        else {
            return true;
        }
    }
    
    public function delete($id)
    {
        $money = Money::where('id','=',(int) $id)->first();
        $money->delete();
        
        return true;
    }
    
    public function getErrors()
    {
        return $this->errors;
    }
}