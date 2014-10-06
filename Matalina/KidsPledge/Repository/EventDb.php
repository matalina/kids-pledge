<?php namespace Matalina\KidsPledge\Repository;

use Matalina\KidsPledge\Interfaces\EventInterface;
use Matalina\KidsPledge\Model\Event;

class EventDb implements EventInterface
{
    protected $errors;
    
    public function create()
    {
        $event = new Event();
        $event->save();
        
        if($event->errors()->count() > 0) {
            $this->errors = $event->errors();
            return false;
        }
        else {
            return true;
        }
    }
    
    public function getAll() 
    {
        return Event::paginate(\Config::get('kidspledge.items-per-page'));
    }
    
    public function getById($id)
    {
        return Event::where('id','=', (int) $id)->first();
    }
    
    public function edit($id)
    {
        $event = Event::where('id','=',(int) $id)->first();
        $event->save();
        
        if($event->errors()->count() > 0) {
            $this->errors = $event->errors();
            return false;
        }
        else {
            return true;
        }
    }
    
    public function delete($id)
    {
        $event = Event::where('id','=',(int) $id)->first();
        $event->delete();
        
        return true;
    }
    
    public function getErrors()
    {
        return $this->errors;
    }
}